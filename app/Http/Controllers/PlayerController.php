<?php

namespace App\Http\Controllers;

use App\Models\GamesFile;
use App\Models\PlayerIndexjson;
use Composer\Package\Archiver\ZipArchiver;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index($gamefileid){
        return view('player.index');
    }

    public function deliver_files($gamefileid, $fileid){
        $gf = GamesFile::whereId($gamefileid)->first();
        $file = PlayerIndexjson::whereId($fileid)->first();

        $path = storage_path('app/public/'.$gf->filename);
        $zip = new \ZipArchive;
        $zip->open($path);
        $fp = $zip->getFromName($file->filename);

        return $fp;
    }

    public function deliver_rtp($gamefileid, $filename){
        $path = storage_path('app/public/rtp/'.$filename);
        return response()->download($path);
    }

    public function deliver_indexjson($gamefileid){
        $index = PlayerIndexjson::whereGamefileId($gamefileid)->get();
        $res = array();

        $res['backdrop\/brickcave5'] = 'rtp\/backdrop_brickcave5.png';
        $res['backdrop\/bridge'] = 'rtp\/backdrop_bridge.png';
        $res['backdrop\/canyon'] = 'rtp\/backdrop_canyon.png';
        $res['backdrop\/castle'] = 'rtp\/backdrop_castle.png';
        $res['backdrop\/cave1'] = 'rtp\/backdrop_cave1.png';
        $res['backdrop\/cave4'] = 'rtp\/backdrop_cave4.png';
        $res['backdrop\/cave9'] = 'rtp\/backdrop_cave9.png';
        $res['backdrop\/dark3'] = 'rtp\/backdrop_dark3.png';
        $res['backdrop\/desert'] = 'rtp\/backdrop_desert.png';
        $res['backdrop\/desert5'] = 'rtp\/backdrop_desert5.png';
        $res['backdrop\/dungeon1'] = 'rtp\/backdrop_dungeon1.png';
        $res['backdrop\/dungeon2'] = 'rtp\/backdrop_dungeon2.png';
        $res['backdrop\/falls2'] = 'rtp\/backdrop_falls2.png';
        $res['backdrop\/forest1'] = 'rtp\/backdrop_forest1.png';
        $res['backdrop\/forest2'] = 'rtp\/backdrop_forest2.png';
        $res['backdrop\/forest4'] = 'rtp\/backdrop_forest4.png';
        $res['backdrop\/future1'] = 'rtp\/backdrop_future1.png';
        $res['backdrop\/future3'] = 'rtp\/backdrop_future3.png';
        $res['backdrop\/galaxy'] = 'rtp\/backdrop_galaxy.png';
        $res['backdrop\/grass'] = 'rtp\/backdrop_grass.png';
        $res['backdrop\/greece'] = 'rtp\/backdrop_greece.png';
        $res['backdrop\/icecave3'] = 'rtp\/backdrop_icecave3.png';
        $res['backdrop\/lavacave2'] = 'rtp\/backdrop_lavacave2.png';
        $res['backdrop\/lightspeed'] = 'rtp\/backdrop_lightspeed.png';
        $res['backdrop\/mtn4'] = 'rtp\/backdrop_mtn4.png';
        $res['backdrop\/nbridge'] = 'rtp\/backdrop_nbridge.png';
        $res['backdrop\/plainsg'] = 'rtp\/backdrop_plainsg.png';
        $res['backdrop\/sea'] = 'rtp\/backdrop_sea.png';
        $res['backdrop\/seabeach'] = 'rtp\/backdrop_seabeach.png';
        $res['backdrop\/ship'] = 'rtp\/backdrop_ship.png';
        $res['backdrop\/ship1'] = 'rtp\/backdrop_ship1.png';
        $res['backdrop\/sky'] = 'rtp\/backdrop_sky.png';
        $res['backdrop\/snow'] = 'rtp\/backdrop_snow.png';
        $res['backdrop\/snowcanyon'] = 'rtp\/backdrop_snowcanyon.png';
        $res['backdrop\/swamp'] = 'rtp\/backdrop_swamp.png';
        $res['backdrop\/town'] = 'rtp\/backdrop_town.png';
        $res['backdrop\/underw1'] = 'rtp\/backdrop_underw1.png';
        $res['backdrop\/wasteland'] = 'rtp\/backdrop_wasteland.png';
        $res['backdrop\/wasteruins'] = 'rtp\/backdrop_wasteruins.png';

        $res['battle\/absorption'] = 'rtp\/backdrop_.png';
        $res['battle\/arrow'] = 'rtp\/backdrop_.png';
        $res['battle\/axe'] = 'rtp\/backdrop_.png';
        $res['battle\/barrier'] = 'rtp\/backdrop_.png';
        $res['battle\/cold'] = 'rtp\/backdrop_.png';
        $res['battle\/dark'] = 'rtp\/backdrop_.png';
        $res['battle\/down'] = 'rtp\/backdrop_.png';
        $res['battle\/earth'] = 'rtp\/backdrop_.png';
        $res['battle\/enemyhp'] = 'rtp\/backdrop_.png';
        $res['battle\/etc'] = 'rtp\/backdrop_.png';
        $res['battle\/explosion'] = 'rtp\/backdrop_.png';
        $res['battle\/fang'] = 'rtp\/backdrop_.png';
        $res['battle\/fire1'] = 'rtp\/backdrop_.png';
        $res['battle\/fire2'] = 'rtp\/backdrop_.png';
        $res['battle\/hit'] = 'rtp\/backdrop_.png';
        $res['battle\/holy'] = 'rtp\/backdrop_.png';
        $res['battle\/paralysis'] = 'rtp\/backdrop_.png';
        $res['battle\/poison'] = 'rtp\/backdrop_.png';
        $res['battle\/qande'] = 'rtp\/backdrop_.png';
        $res['battle\/ray'] = 'rtp\/backdrop_.png';
        $res['battle\/spear'] = 'rtp\/backdrop_.png';
        $res['battle\/sphere'] = 'rtp\/backdrop_.png';
        $res['battle\/sun'] = 'rtp\/backdrop_.png';
        $res['battle\/sword1'] = 'rtp\/backdrop_.png';
        $res['battle\/sword2'] = 'rtp\/backdrop_.png';
        $res['battle\/up'] = 'rtp\/backdrop_.png';
        $res['battle\/water'] = 'rtp\/backdrop_.png';
        $res['battle\/whip'] = 'rtp\/backdrop_.png';
        $res['battle\/wind'] = 'rtp\/backdrop_.png';
        $res['battle\/zip'] = 'rtp\/backdrop_.png';

        $res['charset\/actraiser3.1'] = 'rtp\/charset_actraiser3.1.png';
        $res['charset\/african'] = 'rtp\/charset_african.png';
        $res['charset\/alex'] = 'rtp\/charset_alex.png';
        $res['charset\/alien3'] = 'rtp\/charset_alien3.png';
        $res['charset\/alien4'] = 'rtp\/charset_alien4.png';
        $res['charset\/angel'] = 'rtp\/charset_angel.png';
        $res['charset\/animal'] = 'rtp\/charset_animal.png';
        $res['charset\/arquivo-x'] = 'rtp\/charset_arquivo-x.png';
        $res['charset\/bahamut_lagoon'] = 'rtp\/charset_bahamut_lagoon.png';
        $res['charset\/bartender'] = 'rtp\/charset_bartender.png';
        $res['charset\/bloodydoors'] = 'rtp\/charset_bloodydoors.png';
        $res['charset\/brats01'] = 'rtp\/charset_brats01.png';
        $res['charset\/breathoffire4'] = 'rtp\/charset_breathoffire4.png';
        $res['charset\/brian'] = 'rtp\/charset_brian.png';
        $res['charset\/chara_c1'] = 'rtp\/charset_chara_c1.png';
        $res['charset\/chara_c2'] = 'rtp\/charset_chara_c2.png';
        $res['charset\/chara_h_9'] = 'rtp\/charset_chara_h_9.png';
        $res['charset\/chara_misc_1'] = 'rtp\/charset_chara_misc_1.png';
        $res['charset\/chara01'] = 'rtp\/charset_chara01.png';
        $res['charset\/chara02'] = 'rtp\/charset_chara02.png';
        $res['charset\/chara03'] = 'rtp\/charset_chara03.png';
        $res['charset\/chara04'] = 'rtp\/charset_chara04.png';
        $res['charset\/chara05'] = 'rtp\/charset_chara05.png';
        $res['charset\/chara06'] = 'rtp\/charset_chara06.png';
        $res['charset\/chara07'] = 'rtp\/charset_chara07.png';
        $res['charset\/chara08'] = 'rtp\/charset_chara08.png';
        $res['charset\/chara09'] = 'rtp\/charset_chara09.png';
        $res['charset\/chara1'] = 'rtp\/charset_chara1.png';
        $res['charset\/chara10'] = 'rtp\/charset_chara10.png';
        $res['charset\/chara11'] = 'rtp\/charset_chara11.png';
        $res['charset\/chara12'] = 'rtp\/charset_chara12.png';
        $res['charset\/chara13'] = 'rtp\/charset_chara13.png';
        $res['charset\/chara14'] = 'rtp\/charset_chara14.png';
        $res['charset\/chara15'] = 'rtp\/charset_chara15.png';
        $res['charset\/chara16'] = 'rtp\/charset_chara16.png';
        $res['charset\/chara2'] = 'rtp\/charset_chara2.png';
        $res['charset\/chara3'] = 'rtp\/charset_chara3.png';
        $res['charset\/chara4'] = 'rtp\/charset_chara4.png';
        $res['charset\/chara6gold'] = 'rtp\/charset_chara6gold.png';
        $res['charset\/charaa1'] = 'rtp\/charset_charaa1.png';
        $res['charset\/charaa2'] = 'rtp\/charset_charaa2.png';
        $res['charset\/chubby1'] = 'rtp\/charset_chubby1.png';
        $res['charset\/chubby2'] = 'rtp\/charset_chubby2.png';
        $res['charset\/chubby2b'] = 'rtp\/charset_chubby2b.png';
        $res['charset\/crosshairandtargets'] = 'rtp\/charset_crosshairandtargets.png';
        $res['charset\/crown1'] = 'rtp\/charset_crown1.png';
        $res['charset\/crown2'] = 'rtp\/charset_crown2.png';
        $res['charset\/crown3'] = 'rtp\/charset_crown3.png';
        $res['charset\/crown4'] = 'rtp\/charset_crown4.png';
        $res['charset\/crown5'] = 'rtp\/charset_crown5.png';
        $res['charset\/crown6'] = 'rtp\/charset_crown6.png';
        $res['charset\/crown7'] = 'rtp\/charset_crown7.png';
        $res['charset\/crystals'] = 'rtp\/charset_crystals.png';
        $res['charset\/ctchar'] = 'rtp\/charset_ctchar.png';
        $res['charset\/ctportal'] = 'rtp\/charset_ctportal.png';
        $res['charset\/dbz_chara1'] = 'rtp\/charset_dbz_chara1.png';
        $res['charset\/dbz_chara2'] = 'rtp\/charset_dbz_chara2.png';
        $res['charset\/dbz_orig1'] = 'rtp\/charset_dbz_orig1.png';
        $res['charset\/don_chara1'] = 'rtp\/charset_don_chara1.png';
        $res['charset\/don_collection_1'] = 'rtp\/charset_don_collection_1.png';
        $res['charset\/don_collection_10'] = 'rtp\/charset_don_collection_10.png';
        $res['charset\/don_collection_11'] = 'rtp\/charset_don_collection_11.png';
        $res['charset\/don_collection_12'] = 'rtp\/charset_don_collection_12.png';
        $res['charset\/don_collection_13'] = 'rtp\/charset_don_collection_13.png';
        $res['charset\/don_collection_14'] = 'rtp\/charset_don_collection_14.png';
        $res['charset\/don_collection_15'] = 'rtp\/charset_don_collection_15.png';
        $res['charset\/don_collection_16'] = 'rtp\/charset_don_collection_16.png';
        $res['charset\/don_collection_17'] = 'rtp\/charset_don_collection_17.png';
        $res['charset\/don_collection_18'] = 'rtp\/charset_don_collection_18.png';
        $res['charset\/don_collection_19'] = 'rtp\/charset_don_collection_19.png';
        $res['charset\/don_collection_2'] = 'rtp\/charset_don_collection_2.png';
        $res['charset\/don_collection_20'] = 'rtp\/charset_don_collection_20.png';
        $res['charset\/don_collection_21'] = 'rtp\/charset_don_collection_21.png';
        $res['charset\/don_collection_22'] = 'rtp\/charset_don_collection_22.png';
        $res['charset\/don_collection_23'] = 'rtp\/charset_don_collection_23.png';
        $res['charset\/don_collection_24'] = 'rtp\/charset_don_collection_24.png';
        $res['charset\/don_collection_25'] = 'rtp\/charset_don_collection_25.png';
        $res['charset\/don_collection_26'] = 'rtp\/charset_don_collection_26.png';
        $res['charset\/don_collection_27'] = 'rtp\/charset_don_collection_27.png';
        $res['charset\/don_collection_28'] = 'rtp\/charset_don_collection_28.png';
        $res['charset\/don_collection_3'] = 'rtp\/charset_don_collection_3.png';
        $res['charset\/don_collection_4'] = 'rtp\/charset_don_collection_4.png';
        $res['charset\/don_collection_5'] = 'rtp\/charset_don_collection_5.png';
        $res['charset\/don_collection_6'] = 'rtp\/charset_don_collection_6.png';
        $res['charset\/don_collection_7'] = 'rtp\/charset_don_collection_7.png';
        $res['charset\/don_collection_8'] = 'rtp\/charset_don_collection_8.png';
        $res['charset\/don_collection_9'] = 'rtp\/charset_don_collection_9.png';
        $res['charset\/don_collection_mm'] = 'rtp\/charset_don_collection_mm.png';

        $res['charset\/don_fish'] = 'rtp\/charset_don_fish.png';
        $res['charset\/don_pikatchuu'] = 'rtp\/charset_don_pikatchuu.png';
        $res['charset\/pokeballz'] = 'rtp\/charset_pokeballz.png';
        $res['charset\/xfiles'] = 'rtp\/charset_xfiles.png';
        $res['charset\/earthbound1'] = 'rtp\/charset_earthbound1.png';
        $res['charset\/earthbound2'] = 'rtp\/charset_earthbound2.png';
        $res['charset\/earthbound3'] = 'rtp\/charset_earthbound3.png';
        $res['charset\/earthboundsheet'] = 'rtp\/charset_earthboundsheet.png';
        $res['charset\/edit1'] = 'rtp\/charset_edit1.png';
        $res['charset\/agyptian'] = 'rtp\/charset_agyptian.png';
        $res['charset\/eskimo'] = 'rtp\/charset_eskimo.png';
        $res['charset\/evil1'] = 'rtp\/charset_evil1.png';
        $res['charset\/expression'] = 'rtp\/charset_expression.png';
        $res['charset\/ff3_soldiers'] = 'rtp\/charset_ff3_soldiers.png';
        $res['charset\/ff7_chara1'] = 'rtp\/charset_ff7_chara1.png';
        $res['charset\/ff83'] = 'rtp\/charset_ff83.png';
        $res['charset\/ff9chara'] = 'rtp\/charset_ff9chara.png';
        $res['charset\/fft_archers'] = 'rtp\/charset_fft_archers.png';
        $res['charset\/fft_thieves'] = 'rtp\/charset_fft_thieves.png';
        $res['charset\/flags_n_chests'] = 'rtp\/charset_flags_n_chests.png';
        $res['charset\/free01'] = 'rtp\/charset_free01.png';
        $res['charset\/free02'] = 'rtp\/charset_free02.png';
        $res['charset\/free03'] = 'rtp\/charset_free03.png';
        $res['charset\/free04'] = 'rtp\/charset_free04.png';
        $res['charset\/future_soldiers1'] = 'rtp\/charset_future_soldiers1.png';
        $res['charset\/future1'] = 'rtp\/charset_future1.png';
        $res['charset\/future2'] = 'rtp\/charset_future2.png';
        $res['charset\/future3'] = 'rtp\/charset_future3.png';
        $res['charset\/fx_chara16'] = 'rtp\/charset_fx_chara16.png';
        $res['charset\/gohanssj1-2'] = 'rtp\/charset_gohanssj1-2.png';
        $res['charset\/goldendoors'] = 'rtp\/charset_goldendoors.png';
        $res['charset\/greece'] = 'rtp\/charset_greece.png';
        $res['charset\/houshin5'] = 'rtp\/charset_houshin5.png';
        $res['charset\/illustset1'] = 'rtp\/charset_illustset1.png';
        $res['charset\/islander'] = 'rtp\/charset_islander.png';
        $res['charset\/items_1'] = 'rtp\/charset_items_1.png';
        $res['charset\/items_2'] = 'rtp\/charset_items_2.png';
        $res['charset\/items_3'] = 'rtp\/charset_items_3.png';
        $res['charset\/link'] = 'rtp\/charset_link.png';
        $res['charset\/linofull'] = 'rtp\/charset_linofull.png';
        $res['charset\/mario'] = 'rtp\/charset_mario.png';
        $res['charset\/megaman1'] = 'rtp\/charset_megaman1.png';
        $res['charset\/men1'] = 'rtp\/charset_men1.png';
        $res['charset\/minato_c'] = 'rtp\/charset_minato_c.png';
        $res['charset\/mk'] = 'rtp\/charset_mk.png';
        $res['charset\/mohawk'] = 'rtp\/charset_mohawk.png';
        $res['charset\/monster1'] = 'rtp\/charset_monster1.png';
        $res['charset\/monster2'] = 'rtp\/charset_monster2.png';
        $res['charset\/newaya'] = 'rtp\/charset_newaya.png';
        $res['charset\/object1'] = 'rtp\/charset_object1.png';
        $res['charset\/object2'] = 'rtp\/charset_object2.png';
        $res['charset\/object3'] = 'rtp\/charset_object3.png';
        $res['charset\/object6'] = 'rtp\/charset_object6.png';
        $res['charset\/object9'] = 'rtp\/charset_object9.png';
        $res['charset\/objecta'] = 'rtp\/charset_objecta.png';
        $res['charset\/objectb'] = 'rtp\/charset_objectb.png';
        $res['charset\/objectc'] = 'rtp\/charset_objectc.png';
        $res['charset\/objectd'] = 'rtp\/charset_objectd.png';
        $res['charset\/objecte'] = 'rtp\/charset_objecte.png';
        $res['charset\/objectf'] = 'rtp\/charset_objectf.png';
        $res['charset\/objectg'] = 'rtp\/charset_objectg.png';
        $res['charset\/objecth'] = 'rtp\/charset_objecth.png';
        $res['charset\/objecti'] = 'rtp\/charset_objecti.png';
        $res['charset\/objectj'] = 'rtp\/charset_objectj.png';
        $res['charset\/objectk'] = 'rtp\/charset_objectk.png';
        $res['charset\/objectl'] = 'rtp\/charset_objectl.png';
        $res['charset\/objects3'] = 'rtp\/charset_objects3.png';
        $res['charset\/omek'] = 'rtp\/charset_omek.png';
        $res['charset\/patrick'] = 'rtp\/charset_patrick.png';
        $res['charset\/people1'] = 'rtp\/charset_people1.png';
        $res['charset\/people3'] = 'rtp\/charset_people3.png';
        $res['charset\/people4'] = 'rtp\/charset_people4.png';
        $res['charset\/people5'] = 'rtp\/charset_people5.png';
        $res['charset\/people7'] = 'rtp\/charset_people7.png';
        $res['charset\/pirate'] = 'rtp\/charset_pirate.png';
        $res['charset\/pose'] = 'rtp\/charset_pose.png';
        $res['charset\/pose19'] = 'rtp\/charset_pose19.png';
        $res['charset\/pose2'] = 'rtp\/charset_pose2.png';
        $res['charset\/pose3'] = 'rtp\/charset_pose3.png';
        $res['charset\/poses_kirby_dolphin'] = 'rtp\/charset_poses_kirby_dolphin.png';
        $res['charset\/pw_chara'] = 'rtp\/charset_pw_chara.png';
        $res['charset\/robot'] = 'rtp\/charset_robot.png';
        $res['charset\/robots1'] = 'rtp\/charset_robots1.png';
        $res['charset\/rolf\'sarmy1'] = 'rtp\/charset_rolf\'sarmy1.png';
        $res['charset\/rolf\'sarmy2'] = 'rtp\/charset_rolf\'sarmy2.png';
        $res['charset\/rs3_1'] = 'rtp\/charset_rs3_1.png';
        $res['charset\/sailermoon1'] = 'rtp\/charset_sailermoon1.png';
        $res['charset\/savepoint'] = 'rtp\/charset_savepoint.png';
        $res['charset\/set_ggi1'] = 'rtp\/charset_set_ggi1.png';
        $res['charset\/set_hei1'] = 'rtp\/charset_set_hei1.png';
        $res['charset\/set_ipa1'] = 'rtp\/charset_set_ipa1.png';
        $res['charset\/set_ipa2'] = 'rtp\/charset_set_ipa2.png';
        $res['charset\/set_ken1'] = 'rtp\/charset_set_ken1.png';
        $res['charset\/set_mon1'] = 'rtp\/charset_set_mon1.png';
        $res['charset\/simchara'] = 'rtp\/charset_simchara.png';
        $res['charset\/simpsons'] = 'rtp\/charset_simpsons.png';
        $res['charset\/slime1'] = 'rtp\/charset_slime1.png';
        $res['charset\/slime2'] = 'rtp\/charset_slime2.png';
        $res['charset\/soldiers'] = 'rtp\/charset_soldiers.png';
        $res['charset\/soldiers_brats'] = 'rtp\/charset_soldiers_brats.png';
        $res['charset\/sparkleitems_1'] = 'rtp\/charset_sparkleitems_1.png';
        $res['charset\/sparkleitems_2'] = 'rtp\/charset_sparkleitems_2.png';
        $res['charset\/sparkleitems_3'] = 'rtp\/charset_sparkleitems_3.png';
        $res['charset\/sparkleitems_4'] = 'rtp\/charset_sparkleitems_4.png';
        $res['charset\/ss4gku_futrbulma'] = 'rtp\/charset_ss4gku_futrbulma.png';
        $res['charset\/starc1'] = 'rtp\/charset_starc1.png';
        $res['charset\/starwar1'] = 'rtp\/charset_starwar1.png';
        $res['charset\/starwar2'] = 'rtp\/charset_starwar2.png';
        $res['charset\/sv'] = 'rtp\/charset_sv.png';
        $res['charset\/tenchi'] = 'rtp\/charset_tenchi.png';
        $res['charset\/torch'] = 'rtp\/charset_torch.png';
        $res['charset\/torch_1'] = 'rtp\/charset_torch_1.png';
        $res['charset\/treasure'] = 'rtp\/charset_treasure.png';
        $res['charset\/vegetable'] = 'rtp\/charset_vegetable.png';
        $res['charset\/vehicle'] = 'rtp\/charset_vehicle.png';
        $res['charset\/vehicle3'] = 'rtp\/charset_vehicle3.png';
        $res['charset\/window'] = 'rtp\/charset_window.png';
        $res['charset\/wizard'] = 'rtp\/charset_wizard.png';
        $res['charset\/women1'] = 'rtp\/charset_women1.png';
        $res['charset\/x-files_lh'] = 'rtp\/charset_x-files_lh.png';
        $res['charset\/xfmainchars'] = 'rtp\/charset_xfmainchars.png';
        $res['charset\/xfmainchars2'] = 'rtp\/charset_xfmainchars2.png';
        $res['charset\/xmas_chara1'] = 'rtp\/charset_xmas_chara1.png';
        $res['charset\/x-men-movie'] = 'rtp\/charset_x-men-movie.png';
        $res['charset\/zlightup'] = 'rtp\/charset_zlightup.png';

        $res['chipset\/2ktownset'] = 'rtp\/chipset_2ktownset.png';
        $res['chipset\/3d_castle'] = 'rtp\/chipset_3d_castle.png';
        $res['chipset\/3d_inner'] = 'rtp\/chipset_3d_inner.png';
        $res['chipset\/3d_town'] = 'rtp\/chipset_3d_town.png';
        $res['chipset\/3d_town_'] = 'rtp\/chipset_3d_town_.png';
        $res['chipset\/air_ship'] = 'rtp\/chipset_air_ship.png';
        $res['chipset\/airship1'] = 'rtp\/chipset_airship1.png';
        $res['chipset\/airship2'] = 'rtp\/chipset_airship2.png';
        $res['chipset\/airship4'] = 'rtp\/chipset_airship4.png';
        $res['chipset\/army'] = 'rtp\/chipset_army.png';
        $res['chipset\/basis'] = 'rtp\/chipset_basis.png';
        $res['chipset\/bof'] = 'rtp\/chipset_bof.png';
        $res['chipset\/bof2'] = 'rtp\/chipset_bof2.png';
        $res['chipset\/bof22'] = 'rtp\/chipset_bof22.png';
        $res['chipset\/bof22_b'] = 'rtp\/chipset_bof22_b.png';
        $res['chipset\/boxing_r'] = 'rtp\/chipset_boxing_r.png';
        $res['chipset\/casino'] = 'rtp\/chipset_casino.png';
        $res['chipset\/castle'] = 'rtp\/chipset_castle.png';
        $res['chipset\/castle_2_'] = 'rtp\/chipset_castle_2_.png';
        $res['chipset\/chipset_1'] = 'rtp\/chipset_chipset_1.png';
        $res['chipset\/chipset_2'] = 'rtp\/chipset_chipset_2.png';
        $res['chipset\/chipset_3'] = 'rtp\/chipset_chipset_3.png';
        $res['chipset\/chipset1'] = 'rtp\/chipset_chipset1.png';
        $res['chipset\/chipset10'] = 'rtp\/chipset_chipset10.png';
        $res['chipset\/chipset11'] = 'rtp\/chipset_chipset11.png';
        $res['chipset\/chipset11b'] = 'rtp\/chipset_chipset11b.png';
        $res['chipset\/chipset12'] = 'rtp\/chipset_chipset12.png';
        $res['chipset\/chipset13'] = 'rtp\/chipset_chipset13.png';
        $res['chipset\/chipset13b'] = 'rtp\/chipset_chipset13b.png';
        $res['chipset\/chipset14'] = 'rtp\/chipset_chipset14.png';
        $res['chipset\/chipset15'] = 'rtp\/chipset_chipset15.png';
        $res['chipset\/chipset17'] = 'rtp\/chipset_chipset17.png';
        $res['chipset\/chipset18'] = 'rtp\/chipset_chipset18.png';
        $res['chipset\/chipset19'] = 'rtp\/chipset_chipset19.png';
        $res['chipset\/chipset1old'] = 'rtp\/chipset_chipset1old.png';
        $res['chipset\/chipset2'] = 'rtp\/chipset_chipset2.png';
        $res['chipset\/chipset20'] = 'rtp\/chipset_chipset20.png';
        $res['chipset\/chipset2old'] = 'rtp\/chipset_chipset2old.png';
        $res['chipset\/chipset3'] = 'rtp\/chipset_chipset3.png';
        $res['chipset\/chipset4'] = 'rtp\/chipset_chipset4.png';
        $res['chipset\/chipset5'] = 'rtp\/chipset_chipset5.png';
        $res['chipset\/chipset5b'] = 'rtp\/chipset_chipset5b.png';
        $res['chipset\/chipset5c'] = 'rtp\/chipset_chipset5c.png';
        $res['chipset\/chipset6'] = 'rtp\/chipset_chipset6.png';
        $res['chipset\/chipset6b'] = 'rtp\/chipset_chipset6b.png';
        $res['chipset\/chipset6c'] = 'rtp\/chipset_chipset6c.png';
        $res['chipset\/chipset7'] = 'rtp\/chipset_chipset7.png';
        $res['chipset\/chipset8'] = 'rtp\/chipset_chipset8.png';
        $res['chipset\/chipset9'] = 'rtp\/chipset_chipset9.png';
        $res['chipset\/chronohouses'] = 'rtp\/chipset_chronohouses.png';
        $res['chipset\/darktown'] = 'rtp\/chipset_darktown.png';
        $res['chipset\/darkworld'] = 'rtp\/chipset_darkworld.png';
        $res['chipset\/dumalchipset01'] = 'rtp\/chipset_dumalchipset01.png';
        $res['chipset\/dungeon'] = 'rtp\/chipset_dungeon.png';
        $res['chipset\/dungeon2'] = 'rtp\/chipset_dungeon2.png';
        $res['chipset\/dw3'] = 'rtp\/chipset_dw3.png';
        $res['chipset\/earthboundchips'] = 'rtp\/chipset_earthboundchips.png';
        $res['chipset\/earthboundchips_2'] = 'rtp\/chipset_earthboundchips_2.png';
        $res['chipset\/ebchip_00'] = 'rtp\/chipset_ebchip_00.png';
        $res['chipset\/ebinnerchips'] = 'rtp\/chipset_ebinnerchips.png';
        $res['chipset\/ff6'] = 'rtp\/chipset_ff6.png';
        $res['chipset\/ff6_airship'] = 'rtp\/chipset_ff6_airship.png';
        $res['chipset\/ff6_inner'] = 'rtp\/chipset_ff6_inner.png';
        $res['chipset\/ff6_town'] = 'rtp\/chipset_ff6_town.png';
        $res['chipset\/ff62'] = 'rtp\/chipset_ff62.png';
        $res['chipset\/forest'] = 'rtp\/chipset_forest.png';
        $res['chipset\/forest_t'] = 'rtp\/chipset_forest_t.png';
        $res['chipset\/future_i'] = 'rtp\/chipset_future_i.png';
        $res['chipset\/future_w'] = 'rtp\/chipset_future_w.png';
        $res['chipset\/golden1'] = 'rtp\/chipset_golden1.png';
        $res['chipset\/grey_cas'] = 'rtp\/chipset_grey_cas.png';
        $res['chipset\/hell'] = 'rtp\/chipset_hell.png';
        $res['chipset\/house'] = 'rtp\/chipset_house.png';
        $res['chipset\/house2'] = 'rtp\/chipset_house2.png';
        $res['chipset\/house3'] = 'rtp\/chipset_house3.png';
        $res['chipset\/house4'] = 'rtp\/chipset_house4.png';
        $res['chipset\/house5'] = 'rtp\/chipset_house5.png';
        $res['chipset\/inner'] = 'rtp\/chipset_inner.png';
        $res['chipset\/japanese_town'] = 'rtp\/chipset_japanese_town.png';
        $res['chipset\/lufia2'] = 'rtp\/chipset_lufia2.png';
        $res['chipset\/lufia2_b'] = 'rtp\/chipset_lufia2_b.png';
        $res['chipset\/lufia2_d'] = 'rtp\/chipset_lufia2_d.png';
        $res['chipset\/lufia2_house'] = 'rtp\/chipset_lufia2_house.png';
        $res['chipset\/lufia2_t'] = 'rtp\/chipset_lufia2_t.png';
        $res['chipset\/map_town01'] = 'rtp\/chipset_map_town01.png';
        $res['chipset\/minato1'] = 'rtp\/chipset_minato1.png';
        $res['chipset\/modern'] = 'rtp\/chipset_modern.png';
        $res['chipset\/modern_b'] = 'rtp\/chipset_modern_b.png';
        $res['chipset\/modern_c'] = 'rtp\/chipset_modern_c.png';
        $res['chipset\/modern_world'] = 'rtp\/chipset_modern_world.png';
        $res['chipset\/modern2'] = 'rtp\/chipset_modern2.png';
        $res['chipset\/modern3'] = 'rtp\/chipset_modern3.png';
        $res['chipset\/modified'] = 'rtp\/chipset_modified.png';
        $res['chipset\/outcastle'] = 'rtp\/chipset_outcastle.png';
        $res['chipset\/outline'] = 'rtp\/chipset_outline.png';

        $res['chipset\/phantasystar'] = 'rtp\/chipset_phantasystar.png';
        $res['chipset\/pocket_m'] = 'rtp\/chipset_pocket_m.png';
        $res['chipset\/pokemontiles'] = 'rtp\/chipset_pokemontiles.png';
        $res['chipset\/ps4'] = 'rtp\/chipset_ps4.png';
        $res['chipset\/robotrektown'] = 'rtp\/chipset_robotrektown.png';
        $res['chipset\/rs3'] = 'rtp\/chipset_rs3.png';
        $res['chipset\/school_chipset'] = 'rtp\/chipset_school_chipset.png';
        $res['chipset\/sd3'] = 'rtp\/chipset_sd3.png';
        $res['chipset\/sd3_b'] = 'rtp\/chipset_sd3_b.png';
        $res['chipset\/sd3_c'] = 'rtp\/chipset_sd3_c.png';
        $res['chipset\/sd3_d'] = 'rtp\/chipset_sd3_d.png';
        $res['chipset\/ship'] = 'rtp\/chipset_ship.png';
        $res['chipset\/som'] = 'rtp\/chipset_som.png';
        $res['chipset\/sompalace'] = 'rtp\/chipset_sompalace.png';
        $res['chipset\/sompalace2'] = 'rtp\/chipset_sompalace2.png';
        $res['chipset\/space'] = 'rtp\/chipset_space.png';
        $res['chipset\/suik2herohouse'] = 'rtp\/chipset_suik2herohouse.png';
        $res['chipset\/suik2house'] = 'rtp\/chipset_suik2house.png';
        $res['chipset\/suik2inside'] = 'rtp\/chipset_suik2inside.png';
        $res['chipset\/suik2kyaro'] = 'rtp\/chipset_suik2kyaro.png';
        $res['chipset\/suik2kyaroinside'] = 'rtp\/chipset_suik2kyaroinside.png';
        $res['chipset\/terranig'] = 'rtp\/chipset_terranig.png';
        $res['chipset\/topcity'] = 'rtp\/chipset_topcity.png';
        $res['chipset\/top-totus'] = 'rtp\/chipset_top-totus.png';
        $res['chipset\/town_21'] = 'rtp\/chipset_town_21.png';
        $res['chipset\/town2'] = 'rtp\/chipset_town2.png';
        $res['chipset\/town3'] = 'rtp\/chipset_town3.png';
        $res['chipset\/town4'] = 'rtp\/chipset_town4.png';
        $res['chipset\/townset_greg'] = 'rtp\/chipset_townset_greg.png';
        $res['chipset\/underground'] = 'rtp\/chipset_underground.png';
        $res['chipset\/village'] = 'rtp\/chipset_village.png';
        $res['chipset\/village3'] = 'rtp\/chipset_village3.png';
        $res['chipset\/white'] = 'rtp\/chipset_white.png';
        $res['chipset\/woods'] = 'rtp\/chipset_woods.png';
        $res['chipset\/world'] = 'rtp\/chipset_world.png';
        $res['chipset\/world2'] = 'rtp\/chipset_world2.png';
        $res['chipset\/xfileschipset1'] = 'rtp\/xfileschipset1.png';
        $res['chipset\/zelda3'] = 'rtp\/chipset_zelda3.png';
        $res['chipset\/zelda3_b'] = 'rtp\/chipset_zelda3_b.png';
        $res['chipset\/zelda3_d'] = 'rtp\/chipset_zelda3_d.png';
        $res['chipset\/zeldaw'] = 'rtp\/chipset_zeldaw.png';

        $res['music\/hero1'] = 'rtp\/music_hero1.mid';
        $res['music\/hero2'] = 'rtp\/music_hero2.mid';
        $res['music\/opening1'] = 'rtp\/music_opening1.mid';
        $res['music\/opening2'] = 'rtp\/music_opening2.mid';
        $res['music\/opening3'] = 'rtp\/music_opening3.mid';
        $res['music\/town1'] = 'rtp\/music_town1.mid';
        $res['music\/town2'] = 'rtp\/music_town2.mid';
        $res['music\/town3'] = 'rtp\/music_town3.mid';
        $res['music\/town4'] = 'rtp\/music_town4.mid';
        $res['music\/town5'] = 'rtp\/music_town5.mid';

        $res['picture\/cloud'] = 'rtp\/picture_cloud.png';

        $res['sound\/cursor1'] = 'rtp\/sound_cursor1.wav';
        $res['sound\/cursor2'] = 'rtp\/sound_cursor2.wav';
        $res['sound\/decision1'] = 'rtp\/sound_decision1.wav';
        $res['sound\/decision2'] = 'rtp\/sound_decision2.wav';

        $res['system\/blue'] = 'rtp\/system_blue.png';
        $res['system\/bof2sys'] = 'rtp\/system_bof2sys.png';
        $res['system\/bubbles'] = 'rtp\/system_bubbles.png';
        $res['system\/don_system'] = 'rtp\/system_don_system.png';
        $res['system\/ff2'] = 'rtp\/system_ff2.png';
        $res['system\/ff3'] = 'rtp\/system_ff3.png';
        $res['system\/incomsys'] = 'rtp\/system_incomsys.png';
        $res['system\/lightbluesystem'] = 'rtp\/system_lightbluesystem.png';
        $res['system\/lines'] = 'rtp\/system_lines.png';
        $res['system\/lufia2'] = 'rtp\/system_lufia2.png';
        $res['system\/mint'] = 'rtp\/system_mint.png';
        $res['system\/ogre_battle'] = 'rtp\/system_ogre_battle.png';
        $res['system\/purple'] = 'rtp\/system_purple.png';
        $res['system\/red_future'] = 'rtp\/system_red_future.png';
        $res['system\/redmenu3'] = 'rtp\/system_redmenu3.png';
        $res['system\/royal'] = 'rtp\/system_royal.png';
        $res['system\/sf2sys'] = 'rtp\/system_sf2sys.png';
        $res['system\/shoddy'] = 'rtp\/system_shoddy.png';
        $res['system\/system'] = 'rtp\/system_system.png';
        $res['system\/system01'] = 'rtp\/system_system01.png';
        $res['system\/system02'] = 'rtp\/system_system02.png';
        $res['system\/system03'] = 'rtp\/system_system03.png';
        $res['system\/windows01'] = 'rtp\/system_windows01.png';
        $res['system\/windows02'] = 'rtp\/system_windows02.png';

        $res['title\/title1'] = 'rtp\/title_title1.png';
        $res['title\/title2'] = 'rtp\/title_title2.png';
        $res['title\/title3'] = 'rtp\/title_title3.png';
        $res['title\/title4'] = 'rtp\/title_title4.png';

        // $res[''] = '';

        foreach ($index as $ind) {
            $res[$ind->key] = $ind->id;
        }

        $return = str_replace('\/', '/' ,\GuzzleHttp\json_encode($res, JSON_UNESCAPED_SLASHES));

        return  $return;
    }
}
