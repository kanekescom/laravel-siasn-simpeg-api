<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

use Kanekescom\Siasn\Api\Simpeg\SimpegServiceProvider;
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

        $app['config']->set('siasn-api.params_test.nip_baru', env('SIASN_PARAMS_TEST_NIP_BARU'));
        $app['config']->set('siasn-api.params_test.orang_id', env('SIASN_PARAMS_TEST_ORANG_ID'));
        $app['config']->set('siasn-api.params_test.get_data_anak_nip_baru', env('SIASN_PARAMS_TEST_GET_DATA_ANAK_NIP_BARU'));
        $app['config']->set('siasn-api.params_test.get_angka_kredit_id', env('SIASN_PARAMS_TEST_GET_ANGKA_KREDIT_ID'));
        $app['config']->set('siasn-api.params_test.get_diklat_id', env('SIASN_PARAMS_TEST_GET_DIKLAT_ID'));
        $app['config']->set('siasn-api.params_test.get_hukdis_id', env('SIASN_PARAMS_TEST_GET_HUKDIS_ID'));
        $app['config']->set('siasn-api.params_test.get_jabatan_id', env('SIASN_PARAMS_TEST_GET_JABATAN_ID'));
        $app['config']->set('siasn-api.params_test.get_kursus_id', env('SIASN_PARAMS_TEST_GET_KURSUS_ID'));
        $app['config']->set('siasn-api.params_test.get_penghargaan_id', env('SIASN_PARAMS_TEST_GET_PENGHARGAAN_ID'));
        $app['config']->set('siasn-api.params_test.get_skp22_id', env('SIASN_PARAMS_TEST_GET_SKP22_ID'));
        $app['config']->set('siasn-api.params_test.get_skp_id', env('SIASN_PARAMS_TEST_GET_SKP_ID'));
        $app['config']->set('siasn-api.params_test.get_list_pensiun_instansi_tgl_awal', env('SIASN_PARAMS_TEST_GET_LIST_PENSIUN_INSTANSI_TGL_AWAL'));
        $app['config']->set('siasn-api.params_test.get_list_pensiun_instansi_tgl_akhir', env('SIASN_PARAMS_TEST_GET_LIST_PENSIUN_INSTANSI_TGL_AKHIR'));
        $app['config']->set('siasn-api.params_test.get_list_pengadaan_instansi_tahun', env('SIASN_PARAMS_TEST_GET_LIST_PENGADAAN_INSTANSI_TAHUN'));
        $app['config']->set('siasn-api.params_test.get_list_kp_instansi_periode', env('SIASN_PARAMS_TEST_GET_LIST_KP_INSTANSI_PERIODE'));
    }
}
