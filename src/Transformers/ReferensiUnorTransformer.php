<?php

namespace Kanekescom\Siasn\Api\Simpeg\Transformers;

use League\Fractal\TransformerAbstract;

class ReferensiUnorTransformer extends TransformerAbstract
{
    /**
     * Transform the ReferensiUnor model.
     *
     * @param  Kanekescom\Siasn\Simpeg\Models\ReferensiUnor  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['Id'],
            'instansi_id' => $item['InstansiId'],
            'diatasan_id' => $item['DiatasanId'],
            'eselon_id' => $item['EselonId'],
            'nama_unor' => $item['NamaUnor'],
            'nama_jabatan' => $item['NamaJabatan'],
            'cepat_kode' => $item['CepatKode'],
            'induk_unor_id' => $item['IndukUnorId'],
            'pemimpin_pns_id' => $item['PemimpinPnsId'],
            'jenis_unor_id' => $item['JenisUnorId'],
        ];
    }
}
