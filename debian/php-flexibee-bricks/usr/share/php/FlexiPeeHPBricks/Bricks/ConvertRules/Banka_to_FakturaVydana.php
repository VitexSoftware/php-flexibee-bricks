<?php

namespace FlexiPeehp\Bricks\ConvertRules;

/**
 * Description of Banka_to_FakturaVydana
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Banka_to_FakturaVydana extends \FlexiPeeHP\Bricks\ConvertorRule
{
    public $rules = [
        'kod' => 'kod',
//        'cisDosle' => 'cisDosle',
        'varSym' => 'varSym',
//        'cisSml' => NULL,
//        'cisObj' => 'cisObj',
//        'datObj' => NULL,
//        'cisDodak' => NULL,
//        'doprava' => NULL,
        'datVyst' => 'datVyst',
//        'duzpPuv' => 'duzpPuv',
//        'duzpUcto' => 'duzpUcto',
//        'datSplat' => NULL,
//        'datTermin' => NULL,
//        'datReal' => NULL,
//        'popis' => 'popis',
//        'poznam' => 'poznam',
//        'uvodTxt' => NULL,
//        'zavTxt' => NULL,
//        'sumOsv' => 'sumOsv',
//        'sumZklSniz' => 'sumZklSniz',
//        'sumZklSniz2' => 'sumZklSniz2',
//        'sumZklZakl' => 'sumZklZakl()',
//        'sumDphSniz' => 'sumDphSniz',
//        'sumDphSniz2' => 'sumDphSniz2',
//        'sumDphZakl' => 'sumDphZakl',
//        'sumCelkSniz' => 'sumCelkSniz',
//        'sumCelkSniz2' => 'sumCelkSniz2',
        'sumCelkZakl' => 'sumCelkZakl()',
//        'sumCelkem' => 'sumCelkem',
//        'sumOsvMen' => 'sumOsvMen',
//        'sumZklSnizMen' => 'sumZklSnizMen',
//        'sumZklSniz2Men' => 'sumZklSniz2Men',
//        'sumZklZaklMen' => 'sumZklZaklMen',
//        'sumDphZaklMen' => 'sumDphZaklMen',
//        'sumDphSnizMen' => 'sumDphSnizMen',
//        'sumDphSniz2Men' => 'sumDphSniz2Men',
//        'sumCelkSnizMen' => 'sumCelkSnizMen',
//        'sumCelkSniz2Men' => 'sumCelkSniz2Men',
//        'sumCelkZaklMen' => 'sumCelkZaklMen',
//        'sumCelkemMen' => 'sumCelkemMen',
//        'slevaDokl' => NULL,
//        'kurz' => 'kurz',
//        'kurzMnozstvi' => 'kurzMnozstvi',
//        'stavUzivK' => 'stavUzivK',
//        'nazFirmy' => 'nazFirmy',
//        'ulice' => 'ulice',
//        'mesto' => 'mesto',
//        'psc' => 'psc',
//        'eanKod' => 'eanKod',
//        'ic' => 'ic',
//        'dic' => 'dic',
//        'postovniShodna' => NULL,
//        'faNazev' => NULL,
//        'faNazev2' => NULL,
//        'faUlice' => NULL,
//        'faMesto' => NULL,
//        'faPsc' => NULL,
//        'faEanKod' => NULL,
//        'buc' => 'buc',
//        'iban' => 'iban',
//        'bic' => 'bic',
//        'specSym' => 'specSym',
//        'bezPolozek' => 'bezPolozek',
//        'szbDphSniz' => 'szbDphSniz',
//        'szbDphSniz2' => 'szbDphSniz2',
//        'szbDphZakl' => 'szbDphZakl',
//        'uzpTuzemsko' => 'uzpTuzemsko',
//        'datUcto' => 'datUcto',
//        'vyloucitSaldo' => 'vyloucitSaldo',
//        'zaokrJakSumK' => NULL,
//        'zaokrNaSumK' => NULL,
//        'zaokrJakDphK' => NULL,
//        'zaokrNaDphK' => NULL,
//        'stitky' => 'stitky',
//        'typDokl' => 'typDokl',
//        'mena' => 'mena',
//        'konSym' => 'konSym',
//        'firma' => 'firma',
//        'stat' => 'stat',
//        'faStat' => NULL,
//        'mistUrc' => NULL,
//        'banSpojDod' => 'banSpojDod',
//        'bankovniUcet' => NULL,
//        'typUcOp' => 'typUcOp',
//        'primUcet' => 'primUcet',
//        'protiUcet' => 'protiUcet',
//        'dphZaklUcet' => 'dphZaklUcet',
//        'dphSnizUcet' => 'dphSnizUcet',
//        'dphSniz2Ucet' => 'dphSniz2Ucet',
//        'smerKod' => 'smerKod',
//        'statDph' => 'statDph',
//        'clenDph' => 'clenDph',
//        'stredisko' => 'stredisko',
//        'cinnost' => 'cinnost',
//        'zakazka' => 'zakazka',
//        'statOdesl' => NULL,
//        'statUrc' => NULL,
//        'statPuvod' => NULL,
//        'dodPodm' => NULL,
//        'obchTrans' => NULL,
//        'druhDopr' => NULL,
//        'zvlPoh' => NULL,
//        'krajUrc' => NULL,
//        'zodpOsoba' => 'zodpOsoba',
//        'kontaktOsoba' => 'kontaktOsoba',
//        'kontaktJmeno' => 'kontaktJmeno',
//        'kontaktEmail' => 'kontaktEmail',
//        'kontaktTel' => 'kontaktTel',
//        'rada' => 'rada',
//        'smlouva' => NULL,
//        'formaDopravy' => NULL,
//        'source' => 'source',
//        'balikPocet' => NULL,
//        'balikZacislovan' => NULL,
//        'balikVytvXml' => NULL,
//        'clenKonVykDph' => 'clenKonVykDph',
//        'datUp1' => NULL,
//        'datUp2' => NULL,
//        'datSmir' => NULL,
//        'datPenale' => NULL,
//        'formaUhradyCis' => NULL,
//        'stavUhrK' => NULL,
//        'juhSumPp' => NULL,
//        'juhSumPpMen' => NULL,
//        'sumPrepl' => NULL,
//        'sumPreplMen' => NULL,
//        'hromFakt' => NULL,
//        'zdrojProSkl' => NULL,
//        'prodejka' => NULL,
//        'stavMailK' => NULL,
//        'dobropisovano' => NULL,
//        'sumCelkemBezZaloh' => NULL,
//        'sumCelkemBezZalohMen' => NULL,
//        'odpocAuto' => NULL,
//        'eetDicPoverujiciho' => NULL,
//        'eetFik' => NULL,
//        'eetPkp' => NULL,
//        'eetPokladniZarizeni' => NULL,
//        'eetProvozovna' => NULL,
//        'eetTypK' => NULL,
//        'eetDatCasTrzby' => NULL,
//        'eetTisknoutPkp' => NULL,
//        'typDoklSkl' => NULL,
        'polozkyDokladu' =>
        [
//            'ucetni' => 'ucetni',
//            'kod' => NULL,
            'eanKod' => NULL,
            'nazev' => 'nazev',
            'nazevA' => 'nazevA',
            'nazevB' => 'nazevB',
            'nazevC' => 'nazevC',
//            'cisRad' => 'cisRad',
//            'typPolozkyK' => 'typPolozkyK',
//            'baleniId' => NULL,
//            'mnozBaleni' => NULL,
//            'mnozMj' => NULL,
//            'typCenyDphK' => NULL,
//            'typSzbDphK' => 'typSzbDphK',
//            'szbDph' => 'szbDph',
//            'cenaMj' => NULL,
//            'slevaPol' => NULL,
//            'uplSlevaDokl' => NULL,
//            'sumZkl' => 'sumZkl',
//            'sumDph' => 'sumDph',
//            'sumCelkem' => 'sumCelkem',
//            'sumZklMen' => 'sumZklMen',
//            'sumDphMen' => 'sumDphMen',
//            'sumCelkemMen' => 'sumCelkemMen',
//            'objem' => NULL,
//            'cenJednotka' => NULL,
//            'typVypCenyK' => NULL,
//            'cenaMjNakup' => NULL,
//            'cenaMjProdej' => NULL,
//            'cenaMjCenikTuz' => NULL,
//            'procZakl' => NULL,
//            'slevaMnoz' => NULL,
//            'zaokrJakK' => NULL,
//            'zaokrNaK' => NULL,
//            'sarze' => NULL,
//            'expirace' => NULL,
//            'datTrvan' => NULL,
//            'datVyroby' => NULL,
//            'stavUzivK' => NULL,
//            'poznam' => 'poznam',
//            'kopZklMdUcet' => 'kopZklMdUcet',
//            'kopZklDalUcet' => 'kopZklDalUcet',
//            'kopDphMdUcet' => 'kopDphMdUcet',
//            'kopDphDalUcet' => 'kopDphDalUcet',
//            'kopTypUcOp' => 'kopTypUcOp',
//            'kopZakazku' => 'kopZakazku',
//            'kopStred' => 'kopStred',
//            'kopCinnost' => 'kopCinnost',
//            'kopKlice' => 'kopKlice',
//            'kopClenDph' => 'kopClenDph',
//            'kopDatUcto' => 'kopDatUcto',
//            'datUcto' => 'datUcto',
//            'sklad' => NULL,
//            'stredisko' => 'stredisko',
//            'cinnost' => 'cinnost',
//            'typUcOp' => 'typUcOp',
//            'zklMdUcet' => 'zklMdUcet',
//            'zklDalUcet' => 'zklDalUcet',
//            'dphMdUcet' => 'dphMdUcet',
//            'dphDalUcet' => 'dphDalUcet',
//            'zakazka' => 'zakazka',
//            'dodavatel' => NULL,
//            'clenDph' => 'clenDph',
//            'dphPren' => 'dphPren',
//            'cenik' => NULL,
//            'cenHlad' => NULL,
//            'mj' => NULL,
//            'mjObjem' => NULL,
//            'sazbaDphPuv' => NULL,
//            'stitky' => 'stitky',
//            'source' => 'source',
//            'clenKonVykDph' => 'clenKonVykDph',
//            'kopClenKonVykDph' => 'kopClenKonVykDph',
//            'ciselnyKodZbozi' => NULL,
//            'druhZbozi' => NULL,
//            'poplatekParentPolFak' => NULL,
//            'zdrojProSkl' => NULL,
//            'zaloha' => NULL,
//            'sumVedlNaklIntrMen' => NULL,
//            'eetTypPlatbyK' => NULL,
        ],
    ];

    /**
     * Actions performed after converting process
     * 
     * @return boolean
     */
    public function sumCelkZakl($inPrice)
    {
        if (empty($this->convertor->getInput()->getSubitems())) {
            $this->convertor->getOutput()->addArrayToBranch(['typCenyDphK' => 'typCeny.sDph',
                'cenaMj' => floatval($inPrice)]);
        }
        return null;
    }
}
