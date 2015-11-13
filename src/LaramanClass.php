<?php
namespace Phpuzem\Laraman;

use Illuminate\Support\Collection;

class LaramanClass
{
    public function generate()
    {
        return Collection::make([
            'Aba vakti aba,yaba vakti yaba alan yanılmaz.',
            'Aba vakti yaba, yaba vakti aba.',
            'Abanın kadri yağmurda bilinir.',
            'Abdal abdalın ne umduğunu, ne bulduğunu ister.',
            'Abdal ata binince bey oldum sanır, şalgam aşa girince yağ oldum sanır.',
        ])->random();
    }
}
