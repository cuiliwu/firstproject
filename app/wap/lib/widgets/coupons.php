<?php
/**
 * @copyright ecclub.cn
 * @author chris.zhang
 *
 */
class wap_widgets_coupons extends b2c_widgets_public {
    protected $_status = array(
        '1' => '立即领取',
        '2' => '已领',
        '3' => '活动已结束',
        '4' => '活动未开始',
        '5' => '领光了',
    );

    public function getReceiveCoupons($filter=array()){
        $coupon     = app::get('b2c')->model('coupons');

        $_filter = array(
            'cpns_receive'  => '1',
            'cpns_type'     => '1',
            'cpns_status'   => '1',
        );

        $filter = array_merge($_filter,$filter);
        $result = array();

        $coupons = $coupon->getList('cpns_id,cpns_name,rule_id',$filter);

        $o_rule_order = app::get('b2c')->model('sales_rule_order');


        $time = time();
        //过滤已过期的优惠券，未开始的优惠券不过滤
        foreach($coupons as $key=>$val){
            $rule_info = $o_rule_order->getRow('from_time,to_time',array('rule_id'=>$val['rule_id']));

            if( $time >= $rule_info['to_time'] ){
                continue;
            }

            $result[$key] = $val;
        }
        return $result;
    }

    /**
     * 获取领取的优惠券的信息
     * @params filter array 过滤条件
     * @params datetype int 日期显示类型
     * @return arr array 优惠券信o
     */
    public function getPromotionCoupons($filter=array(),$datetype=1)
    {
        $_filter = array(
            'cpns_receive'  => '1',
            'cpns_type'     => '1',
            'cpns_status'   => '1',
        );
        $filter = array_merge($_filter,$filter);
        $o_coupon = app::get('b2c')->model('coupons');
        $o_rule_order = app::get('b2c')->model('sales_rule_order');

        $date_format = $datatype == 1 ? 'm-d':'Y.m.d';
        $arr = $o_coupon->getList('cpns_id,cpns_name,cpns_gen_quantity,cpns_max_receive_num',$filter);
        $time = time();

        $data = array();
        foreach( $arr as $key=>$row ) {
            $data[$row['cpns_id']] = $row;
            $arr_coupons_info = $o_coupon->dump($row['cpns_id']);
            if(empty($arr_coupons_info['rule']['rule_id'])) continue;
            $arr_rule_info = $o_rule_order->dump($arr_coupons_info['rule']['rule_id'], 'from_time,to_time,member_lv_ids,c_template');
            $data[$row['cpns_id']]['from_time'] = date($date_format,$arr_rule_info['from_time']);
            $data[$row['cpns_id']]['to_time'] = date($date_format,$arr_rule_info['to_time']);

            $remain = intval($row['cpns_max_receive_num']) - intval($row['cpns_gen_quantity']);
            $data[$row['cpns_id']]['memc_code'] = $this->getReceiveStatus($row['cpns_id']);
            $status = $data[$row['cpns_id']]['memc_code'] ? 2:1;

            if( $time >= $arr_rule_info['to_time']){
                $status = '3';
            }

            if( $time < $arr_rule_info['from_time']){
                $status = '4';
            }

            if( $remain <= 0 ){
                $status = '5';
            }
            $data[$row['cpns_id']]['receiveStatus'] = $status;
            $data[$row['cpns_id']]['receiveStatusName'] = $this->_status[$status];
        }

        return $data;
    }

    /**
     * 获取优惠券是否领取
     * @params cpns_id int 优惠券id
     * @return mix 领取时返回优惠券号码，否则返回false
     */
    public function getReceiveStatus( $cpns_id )
    {
        if( !$cpns_id ) return false;

        $userObject = kernel::single('b2c_user_object');
        $member_id = $userObject->get_member_id();
        if( !$member_id ) return false;

        $filter = array(
            'member_id'=>$member_id,
            'cpns_id'=>$cpns_id,
        );
        $member_coupon = app::get('b2c')->model('member_coupon');
        $coupons = $member_coupon->getRow('memc_code',$filter);

        if( isset($coupons['memc_code']) ){
            return $coupons['memc_code'];
        }else{
            return false;
        }
    }

    /**
     * 验证会员是否可以领取优惠券
     * @params $cpns_id 优惠券id
     * @return booleam
     */
    public function verify($cpns_id){
        if( !$cpns_id ) return 2;
        $time = time();

        $userObject = kernel::single('b2c_user_object');
        $member_id = $userObject->get_member_id();

        $member = app::get('b2c')->model('members')->getRow('member_lv_id',array('member_id'=>$member_id));
        $member_lv_id = $member['member_lv_id'];

        $coupons = app::get('b2c')->model('coupons')->getCouponById($cpns_id);

        $remain = intval($coupons['cpns_max_receive_num']) - intval($coupons['cpns_gen_quantity']);

        if( $remain <= 0 ){
            return 3;
        }
        $rule_info = app::get('b2c')->model('sales_rule_order')->getRow('member_lv_ids,from_time,to_time',array('rule_id'=>$coupons['rule_id']));

        $member_lv_ids = explode(',',$rule_info['member_lv_ids']);

        if( !in_array($member_lv_id,$member_lv_ids) ){
            return 4;
        }

        if( $time < $rule_info['from_time'] ){
            return 5;
        }

        if( $time >= $rule_info['to_time'] ){
            return 6;
        }

        return 1;
    }
}
