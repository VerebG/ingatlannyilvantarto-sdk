<?php

namespace Janoszen\Ingatlannyilvantarto\Origo9\WorkingObjects;

class Ingatlan extends AbstractWorkingObject {
	/**
	 * @var int
	 */
	private $jogviszonyKod;
	/**
	 * @var string
	 */
	private $jogviszonyMegnevezes;
	/**
	 * @var int
	 */
	private $hivatalosBesorolasKod;
	/**
	 * @var string
	 */
	private $hivatalosBesorolasMegnevezes;
	/**
	 * @var int
	 */
	private $hasznalhatoHivatalosBesorolasKodok;
	/**
	 * @var string
	 */
	private $hasznalhatoHivatalosBesorolasMegnevezesek;
	/**
	 * @var int
	 */
	private $telepulesKod;
	/**
	 * @var string
	 */
	private $telepulesMegnevezes;
	/**
	 * @var string
	 */
	private $utcaNev;
	/**
	 * @var string
	 */
	private $hirdetettUtca;
	/**
	 * @var int|null
	 */
	private $lattitude;
	/**
	 * @var int|null
	 */
	private $logitude;
	/**
	 * @var string
	 */
	private $teljesCim;
	/**
	 * @var int
	 */
	private $varosreszKod;
	/**
	 * @var string
	 */
	private $varosreszMegnevezes;
	/**
	 * @var int
	 */
	private $meret;
	/**
	 * @var float
	 */
	private $eladasiAr;
	/**
	 * @var int
	 */
	private $eladasiValutaKod;
	/**
	 * @var int
	 */
	private $eladasiArVonatkozasKod;
	/**
	 * @var float
	 */
	private $eladasiArEUR;
	/**
	 * @var float
	 */
	private $berletiDij;
	/**
	 * @var int
	 */
	private $berletiDijValutaKod;
	/**
	 * @var int
	 */
	private $berletiDijVonatkozasKod;
	/**
	 * @var float
	 */
	private $berletiDijEUR;
	/**
	 * @var int
	 */
	private $eladasiArOsszesHUF;
	/**
	 * @var float
	 */
	private $eladasiArNmHUF;
	/**
	 * @var int
	 */
	private $berletiDijOsszesHUF;
	/**
	 * @var int
	 */
	private $berletiDijNmHUF;
	/**
	 * @var float
	 */
	private $eladasiArOsszesEUR;
	/**
	 * @var float
	 */
	private $eladasiArNmEUR;
	/**
	 * @var float
	 */
	private $berletiDijOsszesEUR;
	/**
	 * @var float
	 */
	private $berletiDijNmEUR;
	/**
	 * @var int
	 */
	private $besorolasKod;
	/**
	 * @var string
	 */
	private $besorolasMegnevezes;
	/**
	 * @var int
	 */
	private $epuletAnyagKod;
	/**
	 * @var string
	 */
	private $epuletAnyagMegnevezes;
	/**
	 * @var int
	 */
	private $futesModKod;
	/**
	 * @var string
	 */
	private $futesiModMegnevezes;
	/**
	 * @var int
	 */
	private $epuletAllapotaKod;
	/**
	 * @var string
	 */
	private $epuletAllapotMegnevezes;
	/**
	 * @var int
	 */
	private $belsoAllapotKod;
	/**
	 * @var string
	 */
	private $belsoAllapotMegnevezes;
	/**
	 * @var int
	 */
	private $epitesEve;
	/**
	 * @var int
	 */
	private $felujitasEve;
	/**
	 * @var string
	 */
	private $felujitasModja;
	/**
	 * @var int
	 */
	private $emeletKod;
	/**
	 * @var string
	 */
	private $emeletMegnevezes;
	/**
	 * @var bool
	 */
	private $tetoter;
	/**
	 * @var int
	 */
	private $klimaFelszereltsegKod;
	/**
	 * @var string
	 */
	private $klimaFelszereltsegMegnevezes;
	/**
	 * @var int
	 */
	private $nezetKod;
	/**
	 * @var string
	 */
	private $nezetMegnevezes;
	/**
	 * @var int
	 */
	private $kozosKoltseg;
	/**
	 * @var int
	 */
	private $kozosKoltsegDevizaKod;
	/**
	 * @var string
	 */
	private $kozosKoltsegDevizaMegnevezes;
	/**
	 * @var int|null
	 */
	private $kozosKoltsegTartamla;
	/**
	 * @var int
	 */
	private $kozosKoltsegVonatkozasKod;
	/**
	 * @var \DateTime|null
	 */
	private $koltozesIdeje;
	/**
	 * @var int
	 */
	private $parkolasTipusKod;
	/**
	 * @var string
	 */
	private $parkolasTipusMegnevezes;
	/**
	 * @var int
	 */
	private $energetikaiBesorolasKod;
	/**
	 * @var string
	 */
	private $energetikaiBesorolasMegnevezes;
	/**
	 * @var \DateTime|null
	 */
	private $kiallitasNapja;
	/**
	 * @var string
	 */
	private $teruletNeve;
	/**
	 * @var string
	 */
	private $epuletNeve;
	/**
	 * @var int
	 */
	private $lakasokSzama;
	/**
	 * @var int
	 */
	private $liftKod;
	/**
	 * @var string
	 */
	private $liftMegnevezes;
	/**
	 * @var int
	 */
	private $kozmuVizKod;
	/**
	 * @var string
	 */
	private $kozmuVizMegnevezes;
	/**
	 * @var int
	 */
	private $kozmuVillanyKod;
	/**
	 * @var string
	 */
	private $kozmuVillanyMegnevezes;
	/**
	 * @var int
	 */
	private $kozmuGazKod;
	/**
	 * @var string
	 */
	private $kozmuGazMegnevezes;
	/**
	 * @var int
	 */
	private $kozmuCsatornaKod;
	/**
	 * @var string
	 */
	private $kozmuCsatornaMegnevezes;
	/**
	 * @var int
	 */
	private $butorozottsagKod;
	/**
	 * @var string
	 */
	private $butorozottsagMegnevezes;
	/**
	 * @var int
	 */
	private $sajatTelekMerete;
	/**
	 * @var int
	 */
	private $kaucio;
	/**
	 * @var int
	 */
	private $kaucioDevizaKod;
	/**
	 * @var string
	 */
	private $kaucioDevizaMegnevezes;
	/**
	 * @var bool
	 */
	private $kisallatTartas;
	/**
	 * @var string
	 */
	private $hirdetesSzovege;
	/**
	 * @var string
	 */
	private $tovabbiOvezet;
	/**
	 * @var float
	 */
	private $szelesseg;
	/**
	 * @var float
	 */
	private $hosszusag;
	/**
	 * @var int
	 */
	private $lejtesiSzog;
	/**
	 * @var bool
	 */
	private $beepithetosegMerteke;
	/**
	 * @var bool
	 */
	private $foldAlattiBeepithetoseg;
	/**
	 * @var int
	 */
	private $szintteruletiMutato;
	/**
	 * @var bool|null
	 */
	private $profilvaltasLehetosege;
	/**
	 * @var bool
	 */
	private $cegkentIsElado;
	/**
	 * @var bool
	 */
	private $berlovelElado;
	/**
	 * @var string
	 */
	private $kozmuGazLeiras;
	/**
	 * @var string
	 */
	private $kozmuVizLeiras;
	/**
	 * @var string
	 */
	private $kozmuVillanyLeiras;
	/**
	 * @var string
	 */
	private $kozmuCsatornaLeiras;
	/**
	 * @var bool
	 */
	private $szanto;
	/**
	 * @var bool
	 */
	private $gyep;
	/**
	 * @var bool
	 */
	private $szolo;
	/**
	 * @var bool
	 */
	private $kert;
	/**
	 * @var bool
	 */
	private $gyumolcsos;
	/**
	 * @var bool
	 */
	private $halasto;
	/**
	 * @var bool
	 */
	private $nadas;
	/**
	 * @var bool
	 */
	private $erdo;
	/**
	 * @var bool
	 */
	private $baromfi;
	/**
	 * @var bool
	 */
	private $sertes;
	/**
	 * @var bool
	 */
	private $marha;
	/**
	 * @var bool
	 */
	private $juh;
	/**
	 * @var bool
	 */
	private $lo;
	/**
	 * @var int
	 */
	private $aranykoronaErtek;
	/**
	 * @var int
	 */
	private $egyebEpuletMerete;
	/**
	 * @var int
	 */
	private $rogzitUgyintezoKod;
	/**
	 * @var string
	 */
	private $rogzitUgyintezoNev;
	/**
	 * @var \DateTime
	 */
	private $modositasDatuma;
	/**
	 * @var int
	 */
	private $irodaKod;
	/**
	 * @var string
	 */
	private $irodaNev;
	/**
	 * @var string
	 */
	private $irodaTelefon;
	/**
	 * @var string
	 */
	private $irodaEmail;
	/**
	 * @var string
	 */
	private $irodaCim;
	/**
	 * @var string
	 */
	private $hazSzam;
	/**
	 * @var string
	 */
	private $helyrajziSzam;
	/**
	 * @var int
	 */
	private $minimumEladasiAr;
	/**
	 * @var int
	 */
	private $minimumEladasiDevizaKod;
	/**
	 * @var int
	 */
	private $minimumBerletiDij;
	/**
	 * @var int
	 */
	private $minimumBerletiDijDevizaKod;
	/**
	 * @var int
	 */
	private $kapottJutalekEladasnal;
	/**
	 * @var int
	 */
	private $kapottJutalekBerletnel;
	/**
	 * @var \DateTime|null
	 */
	private $megbizasKezdete;
	/**
	 * @var \DateTime|null
	 */
	private $megbizasVege;
	/**
	 * @var string
	 */
	private $irodaiIktatoSzam;
	/**
	 * @var string
	 */
	private $bizalmasMegjegyzes;
	/**
	 * @var int
	 */
	private $megbizoKod;
	/**
	 * @var string
	 */
	private $megbizoMegnevezes;
	/**
	 * @var string
	 */
	private $tajolas;
	/**
	 * @var int
	 */
	private $ingatlanTipusKod;
	/**
	 * @var string
	 */
	private $ingatlanTipusMegnevezes;
	/**
	 * @var int
	 */
	private $ovezetKod;
	/**
	 * @var string
	 */
	private $ovezetMegnevezes;
	/**
	 * @var int
	 */
	private $kereskedelmiFunkcioKod;
	/**
	 * @var string
	 */
	private $kereskedelmiFunkcioMegnevezes;
	/**
	 * @var int
	 */
	private $kiadoTeruletTipusKod;
	/**
	 * @var string
	 */
	private $kiadoTeruletTipusMegnevezes;
	/**
	 * @var int
	 */
	private $kiemeltKep;
	/**
	 * @var string
	 */
	private $kiemeltKepUtvonal;
	/**
	 * @var int|null
	 */
	private $hasznalhatoKereskedelmiFunkcioKodok;
	/**
	 * @var string
	 */
	private $hasznalhatoFunkcioNevek;
	/**
	 * @var int
	 */
	private $foMuvelesiAgKod;
	/**
	 * @var string
	 */
	private $foMuvelesiAgMegnevezes;
	/**
	 * @var int|null
	 */
	private $hasznalhatoMuvelesiAgKodok;
	/**
	 * @var string
	 */
	private $hasznalhatoMuvelesiAgNevek;
	/**
	 * @var int
	 */
	private $garazsTipusKod;
	/**
	 * @var string
	 */
	private $garazsTipusMegnevezes;
	/**
	 * @var int|null
	 */
	private $halozatiIrodaKodok;
	/**
	 * @var int
	 */
	private $referensKod;
	/**
	 * @var string
	 */
	private $referensNev;
	/**
	 * @var string
	 */
	private $referensEmail;
	/**
	 * @var string
	 */
	private $referensTelefon;
	/**
	 * @var int|null
	 */
	private $halozatiMegosztasKodok;
	/**
	 * @var int
	 */
	private $halozatiJutalekEladasnal;
	/**
	 * @var int
	 */
	private $halozatiJutalekBerletnel;
	/**
	 * @var int
	 */
	private $halozatraMegosztva;
	/**
	 * @var string
	 */
	private $halozatNevek;
	/**
	 * @var int
	 */
	private $lakoHelyisegekSzama;
	/**
	 * @var int
	 */
	private $szobakSzama;
	/**
	 * @var int
	 */
	private $felszobakSzama;
	/**
	 * @var int
	 */
	private $osszTeraszMeret;

	/**
	 * @var Helyiseg[]
	 */
	private $helyisegek = [];

	/**
	 * @var Fenykep[]
	 */
	private $fenykepek = [];

	/**
	 * @param int $jogviszonyKod
	 * @param string $jogviszonyMegnevezes
	 * @param int $hivatalosBesorolasKod
	 * @param string $hivatalosBesorolasMegnevezes
	 * @param int $hasznalhatoHivatalosBesorolasKodok
	 * @param string $hasznalhatoHivatalosBesorolasMegnevezesek
	 * @param int $telepulesKod
	 * @param string $telepulesMegnevezes
	 * @param string $utcaNev
	 * @param string $hirdetettUtca
	 * @param int|null $lattitude
	 * @param int|null $logitude
	 * @param string $teljesCim
	 * @param int $varosreszKod
	 * @param string $varosreszMegnevezes
	 * @param int $meret
	 * @param float $eladasiAr
	 * @param int $eladasiValutaKod
	 * @param int $eladasiArVonatkozasKod
	 * @param float $eladasiArEUR
	 * @param float $berletiDij
	 * @param int $berletiDijValutaKod
	 * @param int $berletiDijVonatkozasKod
	 * @param float $berletiDijEUR
	 * @param int $eladasiArOsszesHUF
	 * @param float $eladasiArNmHUF
	 * @param int $berletiDijOsszesHUF
	 * @param int $berletiDijNmHUF
	 * @param float $eladasiArOsszesEUR
	 * @param float $eladasiArNmEUR
	 * @param float $berletiDijOsszesEUR
	 * @param float $berletiDijNmEUR
	 * @param int $besorolasKod
	 * @param string $besorolasMegnevezes
	 * @param int $epuletAnyagKod
	 * @param string $epuletAnyagMegnevezes
	 * @param int $futesModKod
	 * @param string $futesiModMegnevezes
	 * @param int $epuletAllapotaKod
	 * @param string $epuletAllapotMegnevezes
	 * @param int $belsoAllapotKod
	 * @param string $belsoAllapotMegnevezes
	 * @param int $epitesEve
	 * @param int $felujitasEve
	 * @param string $felujitasModja
	 * @param int $emeletKod
	 * @param string $emeletMegnevezes
	 * @param bool $tetoter
	 * @param int $klimaFelszereltsegKod
	 * @param string $klimaFelszereltsegMegnevezes
	 * @param int $nezetKod
	 * @param string $nezetMegnevezes
	 * @param int $kozosKoltseg
	 * @param int $kozosKoltsegDevizaKod
	 * @param string $kozosKoltsegDevizaMegnevezes
	 * @param int|null $kozosKoltsegTartamla
	 * @param int $kozosKoltsegVonatkozasKod
	 * @param \DateTime|null $koltozesIdeje
	 * @param int $parkolasTipusKod
	 * @param string $parkolasTipusMegnevezes
	 * @param int $energetikaiBesorolasKod
	 * @param string $energetikaiBesorolasMegnevezes
	 * @param \DateTime|null $kiallitasNapja
	 * @param string $teruletNeve
	 * @param string $epuletNeve
	 * @param int $lakasokSzama
	 * @param int $liftKod
	 * @param string $liftMegnevezes
	 * @param int $kozmuVizKod
	 * @param string $kozmuVizMegnevezes
	 * @param int $kozmuVillanyKod
	 * @param string $kozmuVillanyMegnevezes
	 * @param int $kozmuGazKod
	 * @param string $kozmuGazMegnevezes
	 * @param int $kozmuCsatornaKod
	 * @param string $kozmuCsatornaMegnevezes
	 * @param int $butorozottsagKod
	 * @param string $butorozottsagMegnevezes
	 * @param int $sajatTelekMerete
	 * @param int $kaucio
	 * @param int $kaucioDevizaKod
	 * @param string $kaucioDevizaMegnevezes
	 * @param bool $kisallatTartas
	 * @param string $hirdetesSzovege
	 * @param string $tovabbiOvezet
	 * @param float $szelesseg
	 * @param float $hosszusag
	 * @param int $lejtesiSzog
	 * @param bool $beepithetosegMerteke
	 * @param bool $foldAlattiBeepithetoseg
	 * @param int $szintteruletiMutato
	 * @param bool|null $profilvaltasLehetosege
	 * @param bool $cegkentIsElado
	 * @param bool $berlovelElado
	 * @param string $kozmuGazLeiras
	 * @param string $kozmuVizLeiras
	 * @param string $kozmuVillanyLeiras
	 * @param string $kozmuCsatornaLeiras
	 * @param bool $szanto
	 * @param bool $gyep
	 * @param bool $szolo
	 * @param bool $kert
	 * @param bool $gyumolcsos
	 * @param bool $halasto
	 * @param bool $nadas
	 * @param bool $erdo
	 * @param bool $baromfi
	 * @param bool $sertes
	 * @param bool $marha
	 * @param bool $juh
	 * @param bool $lo
	 * @param int $aranykoronaErtek
	 * @param int $egyebEpuletMerete
	 * @param int $rogzitUgyintezoKod
	 * @param string $rogzitUgyintezoNev
	 * @param \DateTime $modositasDatuma
	 * @param int $irodaKod
	 * @param string $irodaNev
	 * @param string $irodaTelefon
	 * @param string $irodaEmail
	 * @param string $irodaCim
	 * @param string $hazSzam
	 * @param string $helyrajziSzam
	 * @param int $minimumEladasiAr
	 * @param int $minimumEladasiDevizaKod
	 * @param int $minimumBerletiDij
	 * @param int $minimumBerletiDijDevizaKod
	 * @param int $kapottJutalekEladasnal
	 * @param int $kapottJutalekBerletnel
	 * @param \DateTime|null $megbizasKezdete
	 * @param \DateTime|null $megbizasVege
	 * @param string $irodaiIktatoSzam
	 * @param string $bizalmasMegjegyzes
	 * @param int $megbizoKod
	 * @param string $megbizoMegnevezes
	 * @param string $tajolas
	 * @param int $ingatlanTipusKod
	 * @param string $ingatlanTipusMegnevezes
	 * @param int $ovezetKod
	 * @param string $ovezetMegnevezes
	 * @param int $kereskedelmiFunkcioKod
	 * @param string $kereskedelmiFunkcioMegnevezes
	 * @param int $kiadoTeruletTipusKod
	 * @param string $kiadoTeruletTipusMegnevezes
	 * @param int $kiemeltKep
	 * @param string $kiemeltKepUtvonal
	 * @param int|null $hasznalhatoKereskedelmiFunkcioKodok
	 * @param string $hasznalhatoFunkcioNevek
	 * @param int $foMuvelesiAgKod
	 * @param string $foMuvelesiAgMegnevezes
	 * @param int|null $hasznalhatoMuvelesiAgKodok
	 * @param string $hasznalhatoMuvelesiAgNevek
	 * @param int $garazsTipusKod
	 * @param string $garazsTipusMegnevezes
	 * @param int|null $halozatiIrodaKodok
	 * @param int $referensKod
	 * @param string $referensNev
	 * @param string $referensEmail
	 * @param string $referensTelefon
	 * @param int|null $halozatiMegosztasKodok
	 * @param int $halozatiJutalekEladasnal
	 * @param int $halozatiJutalekBerletnel
	 * @param int $halozatraMegosztva
	 * @param string $halozatNevek
	 * @param int $lakoHelyisegekSzama
	 * @param int $szobakSzama
	 * @param int $felszobakSzama
	 * @param int $osszTeraszMeret
	 * @param Helyiseg[] $helyisegek
	 * @param Fenykep[] $fenykepek
	 */
	public function __construct(
		$jogviszonyKod,
		$jogviszonyMegnevezes,
		$hivatalosBesorolasKod,
		$hivatalosBesorolasMegnevezes,
		$hasznalhatoHivatalosBesorolasKodok,
		$hasznalhatoHivatalosBesorolasMegnevezesek,
		$telepulesKod,
		$telepulesMegnevezes,
		$utcaNev,
		$hirdetettUtca,
		$lattitude,
		$logitude,
		$teljesCim,
		$varosreszKod,
		$varosreszMegnevezes,
		$meret,
		$eladasiAr,
		$eladasiValutaKod,
		$eladasiArVonatkozasKod,
		$eladasiArEUR,
		$berletiDij,
		$berletiDijValutaKod,
		$berletiDijVonatkozasKod,
		$berletiDijEUR,
		$eladasiArOsszesHUF,
		$eladasiArNmHUF,
		$berletiDijOsszesHUF,
		$berletiDijNmHUF,
		$eladasiArOsszesEUR,
		$eladasiArNmEUR,
		$berletiDijOsszesEUR,
		$berletiDijNmEUR,
		$besorolasKod,
		$besorolasMegnevezes,
		$epuletAnyagKod,
		$epuletAnyagMegnevezes,
		$futesModKod,
		$futesiModMegnevezes,
		$epuletAllapotaKod,
		$epuletAllapotMegnevezes,
		$belsoAllapotKod,
		$belsoAllapotMegnevezes,
		$epitesEve,
		$felujitasEve,
		$felujitasModja,
		$emeletKod,
		$emeletMegnevezes,
		$tetoter,
		$klimaFelszereltsegKod,
		$klimaFelszereltsegMegnevezes,
		$nezetKod,
		$nezetMegnevezes,
		$kozosKoltseg,
		$kozosKoltsegDevizaKod,
		$kozosKoltsegDevizaMegnevezes,
		$kozosKoltsegTartamla,
		$kozosKoltsegVonatkozasKod,
		$koltozesIdeje,
		$parkolasTipusKod,
		$parkolasTipusMegnevezes,
		$energetikaiBesorolasKod,
		$energetikaiBesorolasMegnevezes,
		$kiallitasNapja,
		$teruletNeve,
		$epuletNeve,
		$lakasokSzama,
		$liftKod,
		$liftMegnevezes,
		$kozmuVizKod,
		$kozmuVizMegnevezes,
		$kozmuVillanyKod,
		$kozmuVillanyMegnevezes,
		$kozmuGazKod,
		$kozmuGazMegnevezes,
		$kozmuCsatornaKod,
		$kozmuCsatornaMegnevezes,
		$butorozottsagKod,
		$butorozottsagMegnevezes,
		$sajatTelekMerete,
		$kaucio,
		$kaucioDevizaKod,
		$kaucioDevizaMegnevezes,
		$kisallatTartas,
		$hirdetesSzovege,
		$tovabbiOvezet,
		$szelesseg,
		$hosszusag,
		$lejtesiSzog,
		$beepithetosegMerteke,
		$foldAlattiBeepithetoseg,
		$szintteruletiMutato,
		$profilvaltasLehetosege,
		$cegkentIsElado,
		$berlovelElado,
		$kozmuGazLeiras,
		$kozmuVizLeiras,
		$kozmuVillanyLeiras,
		$kozmuCsatornaLeiras,
		$szanto,
		$gyep,
		$szolo,
		$kert,
		$gyumolcsos,
		$halasto,
		$nadas,
		$erdo,
		$baromfi,
		$sertes,
		$marha,
		$juh,
		$lo,
		$aranykoronaErtek,
		$egyebEpuletMerete,
		$rogzitUgyintezoKod,
		$rogzitUgyintezoNev,
		\DateTime $modositasDatuma,
		$irodaKod,
		$irodaNev,
		$irodaTelefon,
		$irodaEmail,
		$irodaCim,
		$hazSzam,
		$helyrajziSzam,
		$minimumEladasiAr,
		$minimumEladasiDevizaKod,
		$minimumBerletiDij,
		$minimumBerletiDijDevizaKod,
		$kapottJutalekEladasnal,
		$kapottJutalekBerletnel,
		$megbizasKezdete,
		$megbizasVege,
		$irodaiIktatoSzam,
		$bizalmasMegjegyzes,
		$megbizoKod,
		$megbizoMegnevezes,
		$tajolas,
		$ingatlanTipusKod,
		$ingatlanTipusMegnevezes,
		$ovezetKod,
		$ovezetMegnevezes,
		$kereskedelmiFunkcioKod,
		$kereskedelmiFunkcioMegnevezes,
		$kiadoTeruletTipusKod,
		$kiadoTeruletTipusMegnevezes,
		$kiemeltKep,
		$kiemeltKepUtvonal,
		$hasznalhatoKereskedelmiFunkcioKodok,
		$hasznalhatoFunkcioNevek,
		$foMuvelesiAgKod,
		$foMuvelesiAgMegnevezes,
		$hasznalhatoMuvelesiAgKodok,
		$hasznalhatoMuvelesiAgNevek,
		$garazsTipusKod,
		$garazsTipusMegnevezes,
		$halozatiIrodaKodok,
		$referensKod,
		$referensNev,
		$referensEmail,
		$referensTelefon,
		$halozatiMegosztasKodok,
		$halozatiJutalekEladasnal,
		$halozatiJutalekBerletnel,
		$halozatraMegosztva,
		$halozatNevek,
		$lakoHelyisegekSzama,
		$szobakSzama,
		$felszobakSzama,
		$osszTeraszMeret,
		$helyisegek = [],
		$fenykepek = []
	) {
		$this->jogviszonyKod = $jogviszonyKod;
		$this->jogviszonyMegnevezes = $jogviszonyMegnevezes;
		$this->hivatalosBesorolasKod = $hivatalosBesorolasKod;
		$this->hivatalosBesorolasMegnevezes = $hivatalosBesorolasMegnevezes;
		$this->hasznalhatoHivatalosBesorolasKodok = $hasznalhatoHivatalosBesorolasKodok;
		$this->hasznalhatoHivatalosBesorolasMegnevezesek = $hasznalhatoHivatalosBesorolasMegnevezesek;
		$this->telepulesKod = $telepulesKod;
		$this->telepulesMegnevezes = $telepulesMegnevezes;
		$this->utcaNev = $utcaNev;
		$this->hirdetettUtca = $hirdetettUtca;
		$this->lattitude = $lattitude;
		$this->logitude = $logitude;
		$this->teljesCim = $teljesCim;
		$this->varosreszKod = $varosreszKod;
		$this->varosreszMegnevezes = $varosreszMegnevezes;
		$this->meret = $meret;
		$this->eladasiAr = $eladasiAr;
		$this->eladasiValutaKod = $eladasiValutaKod;
		$this->eladasiArVonatkozasKod = $eladasiArVonatkozasKod;
		$this->eladasiArEUR = $eladasiArEUR;
		$this->berletiDij = $berletiDij;
		$this->berletiDijValutaKod = $berletiDijValutaKod;
		$this->berletiDijVonatkozasKod = $berletiDijVonatkozasKod;
		$this->berletiDijEUR = $berletiDijEUR;
		$this->eladasiArOsszesHUF = $eladasiArOsszesHUF;
		$this->eladasiArNmHUF = $eladasiArNmHUF;
		$this->berletiDijOsszesHUF = $berletiDijOsszesHUF;
		$this->berletiDijNmHUF = $berletiDijNmHUF;
		$this->eladasiArOsszesEUR = $eladasiArOsszesEUR;
		$this->eladasiArNmEUR = $eladasiArNmEUR;
		$this->berletiDijOsszesEUR = $berletiDijOsszesEUR;
		$this->berletiDijNmEUR = $berletiDijNmEUR;
		$this->besorolasKod = $besorolasKod;
		$this->besorolasMegnevezes = $besorolasMegnevezes;
		$this->epuletAnyagKod = $epuletAnyagKod;
		$this->epuletAnyagMegnevezes = $epuletAnyagMegnevezes;
		$this->futesModKod = $futesModKod;
		$this->futesiModMegnevezes = $futesiModMegnevezes;
		$this->epuletAllapotaKod = $epuletAllapotaKod;
		$this->epuletAllapotMegnevezes = $epuletAllapotMegnevezes;
		$this->belsoAllapotKod = $belsoAllapotKod;
		$this->belsoAllapotMegnevezes = $belsoAllapotMegnevezes;
		$this->epitesEve = $epitesEve;
		$this->felujitasEve = $felujitasEve;
		$this->felujitasModja = $felujitasModja;
		$this->emeletKod = $emeletKod;
		$this->emeletMegnevezes = $emeletMegnevezes;
		$this->tetoter = $tetoter;
		$this->klimaFelszereltsegKod = $klimaFelszereltsegKod;
		$this->klimaFelszereltsegMegnevezes = $klimaFelszereltsegMegnevezes;
		$this->nezetKod = $nezetKod;
		$this->nezetMegnevezes = $nezetMegnevezes;
		$this->kozosKoltseg = $kozosKoltseg;
		$this->kozosKoltsegDevizaKod = $kozosKoltsegDevizaKod;
		$this->kozosKoltsegDevizaMegnevezes = $kozosKoltsegDevizaMegnevezes;
		$this->kozosKoltsegTartamla = $kozosKoltsegTartamla;
		$this->kozosKoltsegVonatkozasKod = $kozosKoltsegVonatkozasKod;
		$this->koltozesIdeje = $koltozesIdeje;
		$this->parkolasTipusKod = $parkolasTipusKod;
		$this->parkolasTipusMegnevezes = $parkolasTipusMegnevezes;
		$this->energetikaiBesorolasKod = $energetikaiBesorolasKod;
		$this->energetikaiBesorolasMegnevezes = $energetikaiBesorolasMegnevezes;
		$this->kiallitasNapja = $kiallitasNapja;
		$this->teruletNeve = $teruletNeve;
		$this->epuletNeve = $epuletNeve;
		$this->lakasokSzama = $lakasokSzama;
		$this->liftKod = $liftKod;
		$this->liftMegnevezes = $liftMegnevezes;
		$this->kozmuVizKod = $kozmuVizKod;
		$this->kozmuVizMegnevezes = $kozmuVizMegnevezes;
		$this->kozmuVillanyKod = $kozmuVillanyKod;
		$this->kozmuVillanyMegnevezes = $kozmuVillanyMegnevezes;
		$this->kozmuGazKod = $kozmuGazKod;
		$this->kozmuGazMegnevezes = $kozmuGazMegnevezes;
		$this->kozmuCsatornaKod = $kozmuCsatornaKod;
		$this->kozmuCsatornaMegnevezes = $kozmuCsatornaMegnevezes;
		$this->butorozottsagKod = $butorozottsagKod;
		$this->butorozottsagMegnevezes = $butorozottsagMegnevezes;
		$this->sajatTelekMerete = $sajatTelekMerete;
		$this->kaucio = $kaucio;
		$this->kaucioDevizaKod = $kaucioDevizaKod;
		$this->kaucioDevizaMegnevezes = $kaucioDevizaMegnevezes;
		$this->kisallatTartas = $kisallatTartas;
		$this->hirdetesSzovege = $hirdetesSzovege;
		$this->tovabbiOvezet = $tovabbiOvezet;
		$this->szelesseg = $szelesseg;
		$this->hosszusag = $hosszusag;
		$this->lejtesiSzog = $lejtesiSzog;
		$this->beepithetosegMerteke = $beepithetosegMerteke;
		$this->foldAlattiBeepithetoseg = $foldAlattiBeepithetoseg;
		$this->szintteruletiMutato = $szintteruletiMutato;
		$this->profilvaltasLehetosege = $profilvaltasLehetosege;
		$this->cegkentIsElado = $cegkentIsElado;
		$this->berlovelElado = $berlovelElado;
		$this->kozmuGazLeiras = $kozmuGazLeiras;
		$this->kozmuVizLeiras = $kozmuVizLeiras;
		$this->kozmuVillanyLeiras = $kozmuVillanyLeiras;
		$this->kozmuCsatornaLeiras = $kozmuCsatornaLeiras;
		$this->szanto = $szanto;
		$this->gyep = $gyep;
		$this->szolo = $szolo;
		$this->kert = $kert;
		$this->gyumolcsos = $gyumolcsos;
		$this->halasto = $halasto;
		$this->nadas = $nadas;
		$this->erdo = $erdo;
		$this->baromfi = $baromfi;
		$this->sertes = $sertes;
		$this->marha = $marha;
		$this->juh = $juh;
		$this->lo = $lo;
		$this->aranykoronaErtek = $aranykoronaErtek;
		$this->egyebEpuletMerete = $egyebEpuletMerete;
		$this->rogzitUgyintezoKod = $rogzitUgyintezoKod;
		$this->rogzitUgyintezoNev = $rogzitUgyintezoNev;
		$this->modositasDatuma = $modositasDatuma;
		$this->irodaKod = $irodaKod;
		$this->irodaNev = $irodaNev;
		$this->irodaTelefon = $irodaTelefon;
		$this->irodaEmail = $irodaEmail;
		$this->irodaCim = $irodaCim;
		$this->hazSzam = $hazSzam;
		$this->helyrajziSzam = $helyrajziSzam;
		$this->minimumEladasiAr = $minimumEladasiAr;
		$this->minimumEladasiDevizaKod = $minimumEladasiDevizaKod;
		$this->minimumBerletiDij = $minimumBerletiDij;
		$this->minimumBerletiDijDevizaKod = $minimumBerletiDijDevizaKod;
		$this->kapottJutalekEladasnal = $kapottJutalekEladasnal;
		$this->kapottJutalekBerletnel = $kapottJutalekBerletnel;
		$this->megbizasKezdete = $megbizasKezdete;
		$this->megbizasVege = $megbizasVege;
		$this->irodaiIktatoSzam = $irodaiIktatoSzam;
		$this->bizalmasMegjegyzes = $bizalmasMegjegyzes;
		$this->megbizoKod = $megbizoKod;
		$this->megbizoMegnevezes = $megbizoMegnevezes;
		$this->tajolas = $tajolas;
		$this->ingatlanTipusKod = $ingatlanTipusKod;
		$this->ingatlanTipusMegnevezes = $ingatlanTipusMegnevezes;
		$this->ovezetKod = $ovezetKod;
		$this->ovezetMegnevezes = $ovezetMegnevezes;
		$this->kereskedelmiFunkcioKod = $kereskedelmiFunkcioKod;
		$this->kereskedelmiFunkcioMegnevezes = $kereskedelmiFunkcioMegnevezes;
		$this->kiadoTeruletTipusKod = $kiadoTeruletTipusKod;
		$this->kiadoTeruletTipusMegnevezes = $kiadoTeruletTipusMegnevezes;
		$this->kiemeltKep = $kiemeltKep;
		$this->kiemeltKepUtvonal = $kiemeltKepUtvonal;
		$this->hasznalhatoKereskedelmiFunkcioKodok = $hasznalhatoKereskedelmiFunkcioKodok;
		$this->hasznalhatoFunkcioNevek = $hasznalhatoFunkcioNevek;
		$this->foMuvelesiAgKod = $foMuvelesiAgKod;
		$this->foMuvelesiAgMegnevezes = $foMuvelesiAgMegnevezes;
		$this->hasznalhatoMuvelesiAgKodok = $hasznalhatoMuvelesiAgKodok;
		$this->hasznalhatoMuvelesiAgNevek = $hasznalhatoMuvelesiAgNevek;
		$this->garazsTipusKod = $garazsTipusKod;
		$this->garazsTipusMegnevezes = $garazsTipusMegnevezes;
		$this->halozatiIrodaKodok = $halozatiIrodaKodok;
		$this->referensKod = $referensKod;
		$this->referensNev = $referensNev;
		$this->referensEmail = $referensEmail;
		$this->referensTelefon = $referensTelefon;
		$this->halozatiMegosztasKodok = $halozatiMegosztasKodok;
		$this->halozatiJutalekEladasnal = $halozatiJutalekEladasnal;
		$this->halozatiJutalekBerletnel = $halozatiJutalekBerletnel;
		$this->halozatraMegosztva = $halozatraMegosztva;
		$this->halozatNevek = $halozatNevek;
		$this->lakoHelyisegekSzama = $lakoHelyisegekSzama;
		$this->szobakSzama = $szobakSzama;
		$this->felszobakSzama = $felszobakSzama;
		$this->osszTeraszMeret = $osszTeraszMeret;
		$this->helyisegek = $helyisegek;
		$this->fenykepek = $fenykepek;
	}

	/**
	 * @return int
	 */
	public function getJogviszonyKod() {
		return $this->jogviszonyKod;
	}

	/**
	 * @return string
	 */
	public function getJogviszonyMegnevezes() {
		return $this->jogviszonyMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getHivatalosBesorolasKod() {
		return $this->hivatalosBesorolasKod;
	}

	/**
	 * @return string
	 */
	public function getHivatalosBesorolasMegnevezes() {
		return $this->hivatalosBesorolasMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getHasznalhatoHivatalosBesorolasKodok() {
		return $this->hasznalhatoHivatalosBesorolasKodok;
	}

	/**
	 * @return string
	 */
	public function getHasznalhatoHivatalosBesorolasMegnevezesek() {
		return $this->hasznalhatoHivatalosBesorolasMegnevezesek;
	}

	/**
	 * @return int
	 */
	public function getTelepulesKod() {
		return $this->telepulesKod;
	}

	/**
	 * @return string
	 */
	public function getTelepulesMegnevezes() {
		return $this->telepulesMegnevezes;
	}

	/**
	 * @return string
	 */
	public function getUtcaNev() {
		return $this->utcaNev;
	}

	/**
	 * @return string
	 */
	public function getHirdetettUtca() {
		return $this->hirdetettUtca;
	}

	/**
	 * @return int|null
	 */
	public function getLattitude() {
		return $this->lattitude;
	}

	/**
	 * @return int|null
	 */
	public function getLogitude() {
		return $this->logitude;
	}

	/**
	 * @return string
	 */
	public function getTeljesCim() {
		return $this->teljesCim;
	}

	/**
	 * @return int
	 */
	public function getVarosreszKod() {
		return $this->varosreszKod;
	}

	/**
	 * @return string
	 */
	public function getVarosreszMegnevezes() {
		return $this->varosreszMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getMeret() {
		return $this->meret;
	}

	/**
	 * @return float
	 */
	public function getEladasiAr() {
		return $this->eladasiAr;
	}

	/**
	 * @return int
	 */
	public function getEladasiValutaKod() {
		return $this->eladasiValutaKod;
	}

	/**
	 * @return int
	 */
	public function getEladasiArVonatkozasKod() {
		return $this->eladasiArVonatkozasKod;
	}

	/**
	 * @return float
	 */
	public function getEladasiArEUR() {
		return $this->eladasiArEUR;
	}

	/**
	 * @return float
	 */
	public function getBerletiDij() {
		return $this->berletiDij;
	}

	/**
	 * @return int
	 */
	public function getBerletiDijValutaKod() {
		return $this->berletiDijValutaKod;
	}

	/**
	 * @return int
	 */
	public function getBerletiDijVonatkozasKod() {
		return $this->berletiDijVonatkozasKod;
	}

	/**
	 * @return float
	 */
	public function getBerletiDijEUR() {
		return $this->berletiDijEUR;
	}

	/**
	 * @return int
	 */
	public function getEladasiArOsszesHUF() {
		return $this->eladasiArOsszesHUF;
	}

	/**
	 * @return float
	 */
	public function getEladasiArNmHUF() {
		return $this->eladasiArNmHUF;
	}

	/**
	 * @return int
	 */
	public function getBerletiDijOsszesHUF() {
		return $this->berletiDijOsszesHUF;
	}

	/**
	 * @return int
	 */
	public function getBerletiDijNmHUF() {
		return $this->berletiDijNmHUF;
	}

	/**
	 * @return float
	 */
	public function getEladasiArOsszesEUR() {
		return $this->eladasiArOsszesEUR;
	}

	/**
	 * @return float
	 */
	public function getEladasiArNmEUR() {
		return $this->eladasiArNmEUR;
	}

	/**
	 * @return float
	 */
	public function getBerletiDijOsszesEUR() {
		return $this->berletiDijOsszesEUR;
	}

	/**
	 * @return float
	 */
	public function getBerletiDijNmEUR() {
		return $this->berletiDijNmEUR;
	}

	/**
	 * @return int
	 */
	public function getBesorolasKod() {
		return $this->besorolasKod;
	}

	/**
	 * @return string
	 */
	public function getBesorolasMegnevezes() {
		return $this->besorolasMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getEpuletAnyagKod() {
		return $this->epuletAnyagKod;
	}

	/**
	 * @return string
	 */
	public function getEpuletAnyagMegnevezes() {
		return $this->epuletAnyagMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getFutesModKod() {
		return $this->futesModKod;
	}

	/**
	 * @return string
	 */
	public function getFutesiModMegnevezes() {
		return $this->futesiModMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getEpuletAllapotaKod() {
		return $this->epuletAllapotaKod;
	}

	/**
	 * @return string
	 */
	public function getEpuletAllapotMegnevezes() {
		return $this->epuletAllapotMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getBelsoAllapotKod() {
		return $this->belsoAllapotKod;
	}

	/**
	 * @return string
	 */
	public function getBelsoAllapotMegnevezes() {
		return $this->belsoAllapotMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getEpitesEve() {
		return $this->epitesEve;
	}

	/**
	 * @return int
	 */
	public function getFelujitasEve() {
		return $this->felujitasEve;
	}

	/**
	 * @return string
	 */
	public function getFelujitasModja() {
		return $this->felujitasModja;
	}

	/**
	 * @return int
	 */
	public function getEmeletKod() {
		return $this->emeletKod;
	}

	/**
	 * @return string
	 */
	public function getEmeletMegnevezes() {
		return $this->emeletMegnevezes;
	}

	/**
	 * @return bool
	 */
	public function getTetoter() {
		return $this->tetoter;
	}

	/**
	 * @return int
	 */
	public function getKlimaFelszereltsegKod() {
		return $this->klimaFelszereltsegKod;
	}

	/**
	 * @return string
	 */
	public function getKlimaFelszereltsegMegnevezes() {
		return $this->klimaFelszereltsegMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getNezetKod() {
		return $this->nezetKod;
	}

	/**
	 * @return string
	 */
	public function getNezetMegnevezes() {
		return $this->nezetMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getKozosKoltseg() {
		return $this->kozosKoltseg;
	}

	/**
	 * @return int
	 */
	public function getKozosKoltsegDevizaKod() {
		return $this->kozosKoltsegDevizaKod;
	}

	/**
	 * @return string
	 */
	public function getKozosKoltsegDevizaMegnevezes() {
		return $this->kozosKoltsegDevizaMegnevezes;
	}

	/**
	 * @return int|null
	 */
	public function getKozosKoltsegTartamla() {
		return $this->kozosKoltsegTartamla;
	}

	/**
	 * @return int
	 */
	public function getKozosKoltsegVonatkozasKod() {
		return $this->kozosKoltsegVonatkozasKod;
	}

	/**
	 * @return \DateTime|null
	 */
	public function getKoltozesIdeje() {
		return $this->koltozesIdeje;
	}

	/**
	 * @return int
	 */
	public function getParkolasTipusKod() {
		return $this->parkolasTipusKod;
	}

	/**
	 * @return string
	 */
	public function getParkolasTipusMegnevezes() {
		return $this->parkolasTipusMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getEnergetikaiBesorolasKod() {
		return $this->energetikaiBesorolasKod;
	}

	/**
	 * @return string
	 */
	public function getEnergetikaiBesorolasMegnevezes() {
		return $this->energetikaiBesorolasMegnevezes;
	}

	/**
	 * @return \DateTime|null
	 */
	public function getKiallitasNapja() {
		return $this->kiallitasNapja;
	}

	/**
	 * @return string
	 */
	public function getTeruletNeve() {
		return $this->teruletNeve;
	}

	/**
	 * @return string
	 */
	public function getEpuletNeve() {
		return $this->epuletNeve;
	}

	/**
	 * @return int
	 */
	public function getLakasokSzama() {
		return $this->lakasokSzama;
	}

	/**
	 * @return int
	 */
	public function getLiftKod() {
		return $this->liftKod;
	}

	/**
	 * @return string
	 */
	public function getLiftMegnevezes() {
		return $this->liftMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getKozmuVizKod() {
		return $this->kozmuVizKod;
	}

	/**
	 * @return string
	 */
	public function getKozmuVizMegnevezes() {
		return $this->kozmuVizMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getKozmuVillanyKod() {
		return $this->kozmuVillanyKod;
	}

	/**
	 * @return string
	 */
	public function getKozmuVillanyMegnevezes() {
		return $this->kozmuVillanyMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getKozmuGazKod() {
		return $this->kozmuGazKod;
	}

	/**
	 * @return string
	 */
	public function getKozmuGazMegnevezes() {
		return $this->kozmuGazMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getKozmuCsatornaKod() {
		return $this->kozmuCsatornaKod;
	}

	/**
	 * @return string
	 */
	public function getKozmuCsatornaMegnevezes() {
		return $this->kozmuCsatornaMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getButorozottsagKod() {
		return $this->butorozottsagKod;
	}

	/**
	 * @return string
	 */
	public function getButorozottsagMegnevezes() {
		return $this->butorozottsagMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getSajatTelekMerete() {
		return $this->sajatTelekMerete;
	}

	/**
	 * @return int
	 */
	public function getKaucio() {
		return $this->kaucio;
	}

	/**
	 * @return int
	 */
	public function getKaucioDevizaKod() {
		return $this->kaucioDevizaKod;
	}

	/**
	 * @return string
	 */
	public function getKaucioDevizaMegnevezes() {
		return $this->kaucioDevizaMegnevezes;
	}

	/**
	 * @return bool
	 */
	public function getKisallatTartas() {
		return $this->kisallatTartas;
	}

	/**
	 * @return string
	 */
	public function getHirdetesSzovege() {
		return $this->hirdetesSzovege;
	}

	/**
	 * @return string
	 */
	public function getTovabbiOvezet() {
		return $this->tovabbiOvezet;
	}

	/**
	 * @return float
	 */
	public function getSzelesseg() {
		return $this->szelesseg;
	}

	/**
	 * @return float
	 */
	public function getHosszusag() {
		return $this->hosszusag;
	}

	/**
	 * @return int
	 */
	public function getLejtesiSzog() {
		return $this->lejtesiSzog;
	}

	/**
	 * @return bool
	 */
	public function getBeepithetosegMerteke() {
		return $this->beepithetosegMerteke;
	}

	/**
	 * @return bool
	 */
	public function getFoldAlattiBeepithetoseg() {
		return $this->foldAlattiBeepithetoseg;
	}

	/**
	 * @return int
	 */
	public function getSzintteruletiMutato() {
		return $this->szintteruletiMutato;
	}

	/**
	 * @return bool|null
	 */
	public function getProfilvaltasLehetosege() {
		return $this->profilvaltasLehetosege;
	}

	/**
	 * @return bool
	 */
	public function getCegkentIsElado() {
		return $this->cegkentIsElado;
	}

	/**
	 * @return bool
	 */
	public function getBerlovelElado() {
		return $this->berlovelElado;
	}

	/**
	 * @return string
	 */
	public function getKozmuGazLeiras() {
		return $this->kozmuGazLeiras;
	}

	/**
	 * @return string
	 */
	public function getKozmuVizLeiras() {
		return $this->kozmuVizLeiras;
	}

	/**
	 * @return string
	 */
	public function getKozmuVillanyLeiras() {
		return $this->kozmuVillanyLeiras;
	}

	/**
	 * @return string
	 */
	public function getKozmuCsatornaLeiras() {
		return $this->kozmuCsatornaLeiras;
	}

	/**
	 * @return bool
	 */
	public function getSzanto() {
		return $this->szanto;
	}

	/**
	 * @return bool
	 */
	public function getGyep() {
		return $this->gyep;
	}

	/**
	 * @return bool
	 */
	public function getSzolo() {
		return $this->szolo;
	}

	/**
	 * @return bool
	 */
	public function getKert() {
		return $this->kert;
	}

	/**
	 * @return bool
	 */
	public function getGyumolcsos() {
		return $this->gyumolcsos;
	}

	/**
	 * @return bool
	 */
	public function getHalasto() {
		return $this->halasto;
	}

	/**
	 * @return bool
	 */
	public function getNadas() {
		return $this->nadas;
	}

	/**
	 * @return bool
	 */
	public function getErdo() {
		return $this->erdo;
	}

	/**
	 * @return bool
	 */
	public function getBaromfi() {
		return $this->baromfi;
	}

	/**
	 * @return bool
	 */
	public function getSertes() {
		return $this->sertes;
	}

	/**
	 * @return bool
	 */
	public function getMarha() {
		return $this->marha;
	}

	/**
	 * @return bool
	 */
	public function getJuh() {
		return $this->juh;
	}

	/**
	 * @return bool
	 */
	public function getLo() {
		return $this->lo;
	}

	/**
	 * @return int
	 */
	public function getAranykoronaErtek() {
		return $this->aranykoronaErtek;
	}

	/**
	 * @return int
	 */
	public function getEgyebEpuletMerete() {
		return $this->egyebEpuletMerete;
	}

	/**
	 * @return int
	 */
	public function getRogzitUgyintezoKod() {
		return $this->rogzitUgyintezoKod;
	}

	/**
	 * @return string
	 */
	public function getRogzitUgyintezoNev() {
		return $this->rogzitUgyintezoNev;
	}

	/**
	 * @return \DateTime
	 */
	public function getModositasDatuma() {
		return $this->modositasDatuma;
	}

	/**
	 * @return int
	 */
	public function getIrodaKod() {
		return $this->irodaKod;
	}

	/**
	 * @return string
	 */
	public function getIrodaNev() {
		return $this->irodaNev;
	}

	/**
	 * @return string
	 */
	public function getIrodaTelefon() {
		return $this->irodaTelefon;
	}

	/**
	 * @return string
	 */
	public function getIrodaEmail() {
		return $this->irodaEmail;
	}

	/**
	 * @return string
	 */
	public function getIrodaCim() {
		return $this->irodaCim;
	}

	/**
	 * @return string
	 */
	public function getHazSzam() {
		return $this->hazSzam;
	}

	/**
	 * @return string
	 */
	public function getHelyrajziSzam() {
		return $this->helyrajziSzam;
	}

	/**
	 * @return int
	 */
	public function getMinimumEladasiAr() {
		return $this->minimumEladasiAr;
	}

	/**
	 * @return int
	 */
	public function getMinimumEladasiDevizaKod() {
		return $this->minimumEladasiDevizaKod;
	}

	/**
	 * @return int
	 */
	public function getMinimumBerletiDij() {
		return $this->minimumBerletiDij;
	}

	/**
	 * @return int
	 */
	public function getMinimumBerletiDijDevizaKod() {
		return $this->minimumBerletiDijDevizaKod;
	}

	/**
	 * @return int
	 */
	public function getKapottJutalekEladasnal() {
		return $this->kapottJutalekEladasnal;
	}

	/**
	 * @return int
	 */
	public function getKapottJutalekBerletnel() {
		return $this->kapottJutalekBerletnel;
	}

	/**
	 * @return \DateTime|null
	 */
	public function getMegbizasKezdete() {
		return $this->megbizasKezdete;
	}

	/**
	 * @return \DateTime|null
	 */
	public function getMegbizasVege() {
		return $this->megbizasVege;
	}

	/**
	 * @return string
	 */
	public function getIrodaiIktatoSzam() {
		return $this->irodaiIktatoSzam;
	}

	/**
	 * @return string
	 */
	public function getBizalmasMegjegyzes() {
		return $this->bizalmasMegjegyzes;
	}

	/**
	 * @return int
	 */
	public function getMegbizoKod() {
		return $this->megbizoKod;
	}

	/**
	 * @return string
	 */
	public function getMegbizoMegnevezes() {
		return $this->megbizoMegnevezes;
	}

	/**
	 * @return string
	 */
	public function getTajolas() {
		return $this->tajolas;
	}

	/**
	 * @return int
	 */
	public function getIngatlanTipusKod() {
		return $this->ingatlanTipusKod;
	}

	/**
	 * @return string
	 */
	public function getIngatlanTipusMegnevezes() {
		return $this->ingatlanTipusMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getOvezetKod() {
		return $this->ovezetKod;
	}

	/**
	 * @return string
	 */
	public function getOvezetMegnevezes() {
		return $this->ovezetMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getKereskedelmiFunkcioKod() {
		return $this->kereskedelmiFunkcioKod;
	}

	/**
	 * @return string
	 */
	public function getKereskedelmiFunkcioMegnevezes() {
		return $this->kereskedelmiFunkcioMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getKiadoTeruletTipusKod() {
		return $this->kiadoTeruletTipusKod;
	}

	/**
	 * @return string
	 */
	public function getKiadoTeruletTipusMegnevezes() {
		return $this->kiadoTeruletTipusMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getKiemeltKep() {
		return $this->kiemeltKep;
	}

	/**
	 * @return string
	 */
	public function getKiemeltKepUtvonal() {
		return $this->kiemeltKepUtvonal;
	}

	/**
	 * @return int|null
	 */
	public function getHasznalhatoKereskedelmiFunkcioKodok() {
		return $this->hasznalhatoKereskedelmiFunkcioKodok;
	}

	/**
	 * @return string
	 */
	public function getHasznalhatoFunkcioNevek() {
		return $this->hasznalhatoFunkcioNevek;
	}

	/**
	 * @return int
	 */
	public function getFoMuvelesiAgKod() {
		return $this->foMuvelesiAgKod;
	}

	/**
	 * @return string
	 */
	public function getFoMuvelesiAgMegnevezes() {
		return $this->foMuvelesiAgMegnevezes;
	}

	/**
	 * @return int|null
	 */
	public function getHasznalhatoMuvelesiAgKodok() {
		return $this->hasznalhatoMuvelesiAgKodok;
	}

	/**
	 * @return string
	 */
	public function getHasznalhatoMuvelesiAgNevek() {
		return $this->hasznalhatoMuvelesiAgNevek;
	}

	/**
	 * @return int
	 */
	public function getGarazsTipusKod() {
		return $this->garazsTipusKod;
	}

	/**
	 * @return string
	 */
	public function getGarazsTipusMegnevezes() {
		return $this->garazsTipusMegnevezes;
	}

	/**
	 * @return int|null
	 */
	public function getHalozatiIrodaKodok() {
		return $this->halozatiIrodaKodok;
	}

	/**
	 * @return int
	 */
	public function getReferensKod() {
		return $this->referensKod;
	}

	/**
	 * @return string
	 */
	public function getReferensNev() {
		return $this->referensNev;
	}

	/**
	 * @return string
	 */
	public function getReferensEmail() {
		return $this->referensEmail;
	}

	/**
	 * @return string
	 */
	public function getReferensTelefon() {
		return $this->referensTelefon;
	}

	/**
	 * @return int|null
	 */
	public function getHalozatiMegosztasKodok() {
		return $this->halozatiMegosztasKodok;
	}

	/**
	 * @return int
	 */
	public function getHalozatiJutalekEladasnal() {
		return $this->halozatiJutalekEladasnal;
	}

	/**
	 * @return int
	 */
	public function getHalozatiJutalekBerletnel() {
		return $this->halozatiJutalekBerletnel;
	}

	/**
	 * @return int
	 */
	public function getHalozatraMegosztva() {
		return $this->halozatraMegosztva;
	}

	/**
	 * @return string
	 */
	public function getHalozatNevek() {
		return $this->halozatNevek;
	}

	/**
	 * @return int
	 */
	public function getLakoHelyisegekSzama() {
		return $this->lakoHelyisegekSzama;
	}

	/**
	 * @return int
	 */
	public function getSzobakSzama() {
		return $this->szobakSzama;
	}

	/**
	 * @return int
	 */
	public function getFelszobakSzama() {
		return $this->felszobakSzama;
	}

	/**
	 * @return int
	 */
	public function getOsszTeraszMeret() {
		return $this->osszTeraszMeret;
	}

	/**
	 * @return Helyiseg[]
	 */
	public function getHelyisegek() {
		return $this->helyisegek;
	}

	/**
	 * @return Fenykep[]
	 */
	public function getFenykepek() {
		return $this->fenykepek;
	}
	
	

	public static function fromResponse(\SimpleXMLElement $element) {
		
		$helyisegek = [];
		$fenykepek  = [];

		$helyisegekRaw = self::getValue($element, 'Helyisegek', []);
		foreach ($helyisegekRaw->children() as $helysegRaw) {
			$helyisegek[] = Helyiseg::fromResponse($helysegRaw);
		}
		$fenykepekRaw = self::getValue($element, 'Fenykepek', []);
		foreach ($fenykepekRaw->children() as $fenykepRaw) {
			$fenykepek[] = Fenykep::fromResponse($fenykepRaw);
		}

		return new Ingatlan(
			self::decodeInteger($element, 'JogviszonyKOD'),
			self::decodeString($element, 'JogviszonyMegnevezes'),
			self::decodeInteger($element, 'HivatalosBesorolasKOD'),
			self::decodeString($element, 'HivatalosBesorolasMegnevezes'),
			self::decodeInteger($element, 'HasznalhatoHivatalosBesorolasKodok'),
			self::decodeString($element, 'HasznHivatBesMegnevezesek'),
			self::decodeInteger($element, 'TelepulesKOD'),
			self::decodeString($element, 'TelepulesMegnevezes'),
			self::decodeString($element, 'UtcaNev'),
			self::decodeString($element, 'HirdetettUtca'),
			self::decodeInteger($element, 'Lattitude', null, true),
			self::decodeInteger($element, 'Logitude', null, true),
			self::decodeString($element, 'TeljesCim'),
			self::decodeInteger($element, 'VarosreszKOD'),
			self::decodeString($element, 'VarosreszMegnevezes'),
			self::decodeInteger($element, 'Meret'),
			self::decodeFloat($element, 'EladasiAr'),
			self::decodeInteger($element, 'EladasiValutaKOD'),
			self::decodeInteger($element, 'EladasiArVonatkozasKOD'),
			self::decodeFloat($element, 'EladasiArEUR'),
			self::decodeFloat($element, 'BerletiDij'),
			self::decodeInteger($element, 'BerletiDijValutaKOD'),
			self::decodeInteger($element, 'BerletiDijVonatkozasKOD'),
			self::decodeFloat($element, 'BerletiDijEUR'),
			self::decodeInteger($element, 'EladasiArOsszesHUF'),
			self::decodeFloat($element, 'EladasiArNmHUF'),
			self::decodeInteger($element, 'BerletiDijOsszesHUF'),
			self::decodeInteger($element, 'BerletiDijNmHUF'),
			self::decodeFloat($element, 'EladasiArOsszesEUR'),
			self::decodeFloat($element, 'EladasiArNmEUR'),
			self::decodeFloat($element, 'BerletiDijOsszesEUR'),
			self::decodeFloat($element, 'BerletiDijNmEUR'),
			self::decodeInteger($element, 'BesorolasKOD'),
			self::decodeString($element, 'BesorolasMegnevezes'),
			self::decodeInteger($element, 'EpuletAnyagKOD'),
			self::decodeString($element, 'EpuletAnyagMegnevezes'),
			self::decodeInteger($element, 'FutesModKOD'),
			self::decodeString($element, 'FutesiModMegnevezes'),
			self::decodeInteger($element, 'EpuletAllapotaKOD'),
			self::decodeString($element, 'EpuletAllapotMegnevezes'),
			self::decodeInteger($element, 'BelsoAllapotKOD'),
			self::decodeString($element, 'BelsoAllapotMegnevezes'),
			self::decodeInteger($element, 'EpitesEve'),
			self::decodeInteger($element, 'FelujitasEve'),
			self::decodeString($element, 'FelujitasModja'),
			self::decodeInteger($element, 'EmeletKOD'),
			self::decodeString($element, 'EmeletMegnevezes'),
			self::decodeBoolean($element, 'Tetoter'),
			self::decodeInteger($element, 'KlimaFelszereltsegKOD'),
			self::decodeString($element, 'KlimaFelszereltsegMegnevezes'),
			self::decodeInteger($element, 'NezetKOD'),
			self::decodeString($element, 'NezetMegnevezes'),
			self::decodeInteger($element, 'KozosKoltseg'),
			self::decodeInteger($element, 'KozosKoltsegDevizaKOD'),
			self::decodeString($element, 'KozosKoltsegDevizaMegnevezes'),
			self::decodeInteger($element, 'KozosKoltsegTartamla', null, true),
			self::decodeInteger($element, 'KozosKoltsegVonatkozasKOD'),
			self::decodeDateTime($element, 'KoltozesIdeje', null, true),
			self::decodeInteger($element, 'ParkolasTipusKOD'),
			self::decodeString($element, 'ParkolasTipusMegnevezes'),
			self::decodeInteger($element, 'EnergetikaiBesorolasKOD'),
			self::decodeString($element, 'EnergetikaiBesorolasMegnevezes'),
			self::decodeDateTime($element, 'KiallitasNapja', null, true),
			self::decodeString($element, 'TeruletNeve'),
			self::decodeString($element, 'EpuletNeve'),
			self::decodeInteger($element, 'LakasokSzama'),
			self::decodeInteger($element, 'LiftKOD'),
			self::decodeString($element, 'LiftMegnevezes'),
			self::decodeInteger($element, 'KozmuVizKOD'),
			self::decodeString($element, 'KozmuVizMegnevezes'),
			self::decodeInteger($element, 'KozmuVillanyKOD'),
			self::decodeString($element, 'KozmuVillanyMegnevezes'),
			self::decodeInteger($element, 'KozmuGazKOD'),
			self::decodeString($element, 'KozmuGazMegnevezes'),
			self::decodeInteger($element, 'KozmuCsatornaKOD'),
			self::decodeString($element, 'KozmuCsatornaMegnevezes'),
			self::decodeInteger($element, 'ButorozottsagKOD'),
			self::decodeString($element, 'ButorozottsagMegnevezes'),
			self::decodeInteger($element, 'SajatTelekMerete'),
			self::decodeInteger($element, 'Kaucio'),
			self::decodeInteger($element, 'KaucioDevizaKOD'),
			self::decodeString($element, 'KaucioDevizaMegnevezes'),
			self::decodeBoolean($element, 'KisallatTartas'),
			self::decodeString($element, 'HirdetesSzovege'),
			self::decodeString($element, 'TovabbiOvezet'),
			self::decodeFloat($element, 'Szelesseg'),
			self::decodeFloat($element, 'Hosszusag'),
			self::decodeInteger($element, 'LejtesiSzog'),
			self::decodeBoolean($element, 'BeepithetosegMerteke'),
			self::decodeBoolean($element, 'FoldAlattiBeepithetoseg'),
			self::decodeInteger($element, 'SzintteruletiMutato'),
			self::decodeBoolean($element, 'ProfilvaltasLehetosege', null, true),
			self::decodeBoolean($element, 'CegkentIsElado'),
			self::decodeBoolean($element, 'BerlovelElado'),
			self::decodeString($element, 'KozmuGazLeiras'),
			self::decodeString($element, 'KozmuVizLeiras'),
			self::decodeString($element, 'KozmuVillanyLeiras'),
			self::decodeString($element, 'KozmuCsatornaLeiras'),
			self::decodeBoolean($element, 'Szanto'),
			self::decodeBoolean($element, 'Gyep'),
			self::decodeBoolean($element, 'Szolo'),
			self::decodeBoolean($element, 'Kert'),
			self::decodeBoolean($element, 'Gyumolcsos'),
			self::decodeBoolean($element, 'Halasto'),
			self::decodeBoolean($element, 'Nadas'),
			self::decodeBoolean($element, 'Erdo'),
			self::decodeBoolean($element, 'Baromfi'),
			self::decodeBoolean($element, 'Sertes'),
			self::decodeBoolean($element, 'Marha'),
			self::decodeBoolean($element, 'Juh'),
			self::decodeBoolean($element, 'Lo'),
			self::decodeInteger($element, 'AranykoronaErtek'),
			self::decodeInteger($element, 'EgyebEpuletMerete'),
			self::decodeInteger($element, 'RogzitUgyintezoKOD'),
			self::decodeString($element, 'RogzitUgyintezoNev'),
			self::decodeDateTime($element, 'ModositasDatuma'),
			self::decodeInteger($element, 'IrodaKOD'),
			self::decodeString($element, 'IrodaNev'),
			self::decodeString($element, 'IrodaTelefon'),
			self::decodeString($element, 'IrodaEmail'),
			self::decodeString($element, 'IrodaCim'),
			self::decodeString($element, 'HazSzam'),
			self::decodeString($element, 'HelyrajziSzam'),
			self::decodeInteger($element, 'MinimumEladasiAr'),
			self::decodeInteger($element, 'MinimumEladasiDevizaKOD'),
			self::decodeInteger($element, 'MinimumBerletiDij'),
			self::decodeInteger($element, 'MinimumBerletiDijDevizaKOD'),
			self::decodeInteger($element, 'KapottJutalekEladasnal'),
			self::decodeInteger($element, 'KapottJutalekBerletnel'),
			self::decodeDateTime($element, 'MegbizasKezdete', null, true),
			self::decodeDateTime($element, 'MegbizasVege', null, true),
			self::decodeString($element, 'IrodaiIktatoSzam'),
			self::decodeString($element, 'BizalmasMegjegyzes'),
			self::decodeInteger($element, 'MegbizoKOD'),
			self::decodeString($element, 'MegbizoMegnevezes'),
			self::decodeString($element, 'Tajolas'),
			self::decodeInteger($element, 'IngatlanTipusKOD'),
			self::decodeString($element, 'IngatlanTipusMegnevezes'),
			self::decodeInteger($element, 'OvezetKOD'),
			self::decodeString($element, 'OvezetMegnevezes'),
			self::decodeInteger($element, 'KereskedelmiFunkcioKOD'),
			self::decodeString($element, 'KereskedelmiFunkcioMegnevezes'),
			self::decodeInteger($element, 'KiadoTeruletTipusKOD'),
			self::decodeString($element, 'KiadoTeruletTipusMegnevezes'),
			self::decodeInteger($element, 'KiemeltKep'),
			self::decodeString($element, 'KiemeltKepUtvonal'),
			self::decodeInteger($element, 'HasznalhatoKereskedelmiFunkcioKodok', null, true),
			self::decodeString($element, 'HasznalhatoFunkcioNevek'),
			self::decodeInteger($element, 'FoMuvelesiAgKOD'),
			self::decodeString($element, 'FoMuvelesiAgMegnevezes'),
			self::decodeInteger($element, 'HasznalhatoMuvelesiAgKodok', null, true),
			self::decodeString($element, 'HasznalhatoMuvelesiAgNevek'),
			self::decodeInteger($element, 'GarazsTipusKOD'),
			self::decodeString($element, 'GarazsTipusMegnevezes'),
			self::decodeInteger($element, 'HalozatiIrodaKodok', null, true),
			self::decodeInteger($element, 'ReferensKOD'),
			self::decodeString($element, 'ReferensNev'),
			self::decodeString($element, 'ReferensEmail'),
			self::decodeString($element, 'ReferensTelefon'),
			self::decodeInteger($element, 'HalozatiMegosztasKodok', null, true),
			self::decodeInteger($element, 'HalozatiJutalekEladasnal'),
			self::decodeInteger($element, 'HalozatiJutalekBerletnel'),
			self::decodeInteger($element, 'HalozatraMegosztva'),
			self::decodeString($element, 'HalozatNevek'),
			self::decodeInteger($element, 'LakoHelyisegekSzama'),
			self::decodeInteger($element, 'SzobakSzama'),
			self::decodeInteger($element, 'FelszobakSzama'),
			self::decodeInteger($element, 'OsszTeraszMeret'),
			$helyisegek,
			$fenykepek
		);
	}
}