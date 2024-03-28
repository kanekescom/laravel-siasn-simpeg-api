<?php

namespace Kanekescom\Siasn\Simpeg\Api\Tests;

use Kanekescom\Siasn\Simpeg\Api\SimpegServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            SimpegServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('siasn-api', require __DIR__.'/../vendor/kanekescom/laravel-siasn-api/config/siasn-api.php');
        $app['config']->set('siasn-simpeg-api.params_test.nip_baru', env('SIASN_PARAMS_TEST_NIPBARU'));

        // AngkaKredit
        $app['config']->set('siasn-simpeg-api.params_test.get_angkakredit_id', env('SIASN_PARAMS_TEST_GET_ANGKAKREDIT_ID'));

        // CPNS

        // Diklat
        $app['config']->set('siasn-simpeg-api.params_test.get_diklat_id', env('SIASN_PARAMS_TEST_GET_DIKLAT_ID'));

        // Upload
        $app['config']->set('siasn-simpeg-api.params_test.get_download_dok_filepath', env('SIASN_PARAMS_TEST_GET_DOWNLOAD_DOK_FILEPATH'));
        $app['config']->set('siasn-simpeg-api.params_test.download_download_dok_filepath', env('SIASN_PARAMS_TEST_DOWNLOAD_DOWNLOAD_DOK_FILEPATH'));

        // Hukdis
        $app['config']->set('siasn-simpeg-api.params_test.get_hukdis_id', env('SIASN_PARAMS_TEST_GET_HUKDIS_ID'));

        // Jabatan
        $app['config']->set('siasn-simpeg-api.params_test.get_jabatan_id', env('SIASN_PARAMS_TEST_GET_JABATAN_ID'));
        $app['config']->set('siasn-simpeg-api.params_test.get_jabatan_nipbaru', env('SIASN_PARAMS_TEST_GET_JABATAN_NIPBARU'));

        // Kinerja
        $app['config']->set('siasn-simpeg-api.params_test.get_kinerjaperiodik_id', env('SIASN_PARAMS_TEST_GET_KINERJAPERIODDIK_ID'));

        // Kursus
        $app['config']->set('siasn-simpeg-api.params_test.get_kursus_id', env('SIASN_PARAMS_TEST_GET_KURSUS_ID'));

        // Pengadaan
        $app['config']->set('siasn-simpeg-api.params_test.get_pengadaan_list_pengadaan_instansi_tahun', env('SIASN_PARAMS_TEST_GET_PENGADAAN_LIST_PENGADAAN_INSTANSI_TAHUN'));

        // Penghargaan
        $app['config']->set('siasn-simpeg-api.params_test.get_penghargaan_id', env('SIASN_PARAMS_TEST_GET_PENGHARGAAN_ID'));

        // PNS
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_data_anak_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_DATA_ANAK_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_data_ortu_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_DATA_ORTU_BARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_data_pasangan_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_DATA_PASANGAN_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_data_utama_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_DATA_UTAMA_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_photo_idpns', env('SIASN_PARAMS_TEST_GET_PNS_PHOTO_IDPNS'));
        $app['config']->set('siasn-simpeg-api.params_test.download_pns_photo_idpns', env('SIASN_PARAMS_TEST_DOWNLOAD_PNS_PHOTO_IDPNS'));

        // KP
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_list_kp_instansi_periode', env('SIASN_PARAMS_TEST_GET_PNS_LIST_KP_INSTANSI_PERIODE'));

        // Pemberhentian
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_list_pensiun_instansi_tglawal', env('SIASN_PARAMS_TEST_GET_PNS_LIST_PENSIUN_INSTANSI_TGLAWAL'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_list_pensiun_instansi_tglakhir', env('SIASN_PARAMS_TEST_GET_PNS_LIST_PENSIUN_INSTANSI_TGLAKHIR'));

        // Riwayat
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_angkakredit_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_ANGKAKREDIT_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_cltn_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_CLTN_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_diklat_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_DIKLAT_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_dp3_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_DP3_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_golongan_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_GOLONGAN_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_hukdis_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_HUKDIS_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_jabatan_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_JABATAN_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_kinerjaperiodik_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_KINERJAPERIODIK_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_kursus_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_KURSUS_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_masakerja_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_MASAKERJA_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_pemberhentian_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_PEMBERHENTIAN_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_pendidikan_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_PENDIDIKAN_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_penghargaan_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_PENGHARGAAN_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_pindahinstansi_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_PINDAHINSTANSI_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_pnsunor_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_PNSUNOR_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_pwk_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_PWK_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_skp_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_SKP_NIPBARU'));
        $app['config']->set('siasn-simpeg-api.params_test.get_pns_rw_skp22_nipbaru', env('SIASN_PARAMS_TEST_GET_PNS_RW_SKP22_NIPBARU'));

        // Referensi
        $app['config']->set('siasn-simpeg-api.params_test.get_referensi_ref_unor', env('SIASN_PARAMS_TEST_GET_REFERENSI_REF_UNOR'));

        // Skp
        $app['config']->set('siasn-simpeg-api.params_test.get_skp_id', env('SIASN_PARAMS_TEST_GET_SKP_ID'));

        // Skp 2022
        $app['config']->set('siasn-simpeg-api.params_test.get_skp22_id', env('SIASN_PARAMS_TEST_GET_SKP22_ID'));
    }
}
