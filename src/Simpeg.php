<?php

namespace Kanekescom\Siasn\Api\Simpeg;

use Kanekescom\Helperia\Support\ClassExtender;
use Kanekescom\Siasn\Api\Facades\Siasn;

class Simpeg extends ClassExtender
{
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasAngkaKreditEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasCpnsEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasDiklatEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasHukdisEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasJabatanEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasKinerjaEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasKpEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasKursusEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasPemberhentianEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasPengadaanEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasPenghargaanEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasPnsEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasReferensiEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasRiwayatEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasSkp22Endpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasSkpEndpoint;
    use \Kanekescom\Siasn\Api\Simpeg\Traits\HasUploadEndpoint;

    public function __construct()
    {
        $this->class = Siasn::withSso()->baseUrl(config('siasn-simpeg-api.base_url'));
    }
}
