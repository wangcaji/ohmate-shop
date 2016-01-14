<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 2016/1/13
 * Time: 15:32
 */

namespace App\Constants;


class AppConstant {

    /* session key */
    const SESSION_USER_KEY          = 'logged_user';
    /* wechat expire interval */
    const WECHAT_EXPIRE_INTERVAL    = 30;

    /* customer type */
    const CUSTOMER_PATIENT      = 'patient';
    const CUSTOMER_NURSE        = 'nurse';
    const CUSTOMER_DOCTOR       = 'doctor';
    const CUSTOMER_VOLUNTEER    = 'volunteer';

    /* Bean Actions */
    const BEAN_ACTION_FOCUS         = 'focus';
    const BEAN_ACTION_REGISTER      = 'register';
    const BEAN_ACTION_CONSUME       = 'consume';
    const BEAN_ACTION_SIGN_IN       = 'sign_in';
    const BEAN_ACTION_SCAN_ARTICLE  = 'scan_article';
    const BEAN_ACTION_SCAN_VIDEO    = 'scan_video';

    const BEAN_ACTION_DOCTOR_INVITE     = 'invite_feedback_doctor';
    const BEAN_ACTION_VOLUNTEER_INVITE  = 'invite_feedback_volunteer';
    const BEAN_ACTION_CUSTOMER_INVITE   = 'invite_feedback_customer';

    const BEAN_ACTION_EDUCATION_FEEDBACK    = 'feedback_doctor_education';
    const BEAN_ACTION_CONSUME_FEEDBACK      = 'feedback_doctor_consume';

    /*url*/
    const ATTENTION_URL = 'http://mp.weixin.qq.com/s?__biz=MzAxMTY0OTc1MQ==&mid=401938638&idx=1&sn=d4483f5087ca8ccd51f48b74a5747f9c&scene=1&srcid=0114rNGJEWOnEQdEGpnX7Y7i&from=groupmessage&isappinstalled=0&key=41ecb04b051110034d288743b0058d2ba205fe3a1f448de9349ded00996528b67c70fa5a829663e231fb2043c2d4952f&ascene=1&uin=MTE4MTQ5NTM4MA%3D%3D&devicetype=android-19&version=26030849&nettype=WIFI&pass_ticket=XQ1572Eciw7RzuFw3JN%2FcySvJpc4SLsZ5mrM2iG3sEn8Wu1VZF1qnz4K9S1%2Fe%2F7O';

} /*class*/