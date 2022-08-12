<?
    /* ============================================================================== */
    /* =   PAGE : 인증 정보 환경 설정 PAGE                                          = */
    /* = -------------------------------------------------------------------------- = */
    /* = -------------------------------------------------------------------------- = */
    /* =   Copyright (c)  2019   KCP Inc.   All Rights Reserved.                    = */
    /* ============================================================================== */


    /* ============================================================================== */
    /* =   01. 상점 데이터 설정 (업체에 맞게 수정)                                = */
    /* = -------------------------------------------------------------------------- = */
    /* = ※ 주의 ※                                                                   = */
    /* = * $g_conf_home_dir 변수 설정                                               = */
    /* =                                                                            = */
    /* =    $g_conf_home_dir 값 = pp_cli,pp_cli_exe 바이너리 파일이 존재하는        = */
    /* =    bin 디렉토리 전까지의 경로를 입력                                       = */
    /* =                                                                            = */
    /* = * g_conf_site_cd 설정                                                      = */
    /* =                                                                            = */
    /* = 실제인증 시 : 반드시 KCP에서 발급한 사이트코드(site_cd)                    = */
    /* =            로 설정해 주십시오.                                             = */
    /* =                                                                            = */
    /* = * g_conf_web_siteid 설정                                                   = */
    /* =                                                                            = */
    /* = 실제인증 시 : 기존에 DI 관리를 위해 설정하여 사용하시는 값이 있는 경우에만 = */
    /* =           설정 바랍니다. 값이 없으면 KCP에서 지정한 값으로 설정됩니다.     = */
    /* =                                                                            = */
    /* = * g_conf_web_siteid 설정                                                   = */
    /* =                                                                            = */
    /* = 실제인증 시 : 기존에 DI 관리를 위해 설정하여 사용하시는 값이 있는 경우에만 = */
    /* =           설정 바랍니다. 값이 없으면 KCP에서 지정한 값으로 설정됩니다.     = */
    /* =                                                                            = */
    /* = * g_conf_ENC_KEY  설정                                                     = */
    /* =                                                                            = */
    /* = 반드시 외부에 노출되지 않도록 관리하시기 바랍니다.                         = */
    /* =                                                                            = */
    /* = * g_conf_Ret_URL  설정                                                     = */
    /* =                                                                            = */
    /* = 반드시 업체 리턴페이지 주소를 FULL로 설정하십시요                          = */
    /* =                                                                            = */
    /* = -------------------------------------------------------------------------- = */

    /* ============================================================================== */
    /* =   01. 지불 데이터 셋업 (업체에 맞게 수정)                                  = */
    /* = -------------------------------------------------------------------------- = */
    /* = ※ 주의 ※                                                                 = */
    /* = * $g_conf_home_dir 변수 설정                                               = */
    /* = $g_conf_home_dir 값 = pp_cli 바이너리 파일이 존재하는                      = */
    /* =    bin 디렉토리 전까지의 경로를 입력                                       = */
    /* = -------------------------------------------------------------------------- = */

    $g_conf_home_dir     = "../";

    $g_conf_site_cd      = "AHDCT";

    $g_conf_web_siteid   = "J22011707768";

    // $g_conf_ENC_KEY      = "E66DCEB95BFBD45DF9DFAEEBCB092B5DC2EB3BF0";
    $g_conf_ENC_KEY      = "c0e4355fe1733425e04477f8edfee5493d511f1f15b2ce947e39cfe4250d9658";

    $g_conf_Ret_URL      = "http://localhost/test";

    /* ============================================================================== */
    /* =   02. 인증 테스트/상요 설정                                                = */
    /* = -------------------------------------------------------------------------- = */
    /* = * g_conf_gw_url 설정                                                       = */
	/* = 테스트 시 : src="https://testcert.kcp.co.kr/kcp_cert/cert_view.jsp"        = */
    /* = 실결제 시 : src="https://cert.kcp.co.kr/kcp_cert/cert_view.jsp"            = */
    /* = -------------------------------------------------------------------------- = */

    $g_conf_gw_url       = "https://testcert.kcp.co.kr/kcp_cert/cert_view.jsp";
$g_conf_gw_url       = "https://192.168.14.110/kcp_cert/cert_view.jsp";
    /* ============================================================================== */
?>
