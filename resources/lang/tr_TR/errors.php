<?php

/**
 * firefly.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    '404_header'              => 'Firefly III bu sayfayı bulamıyor.',
    '404_page_does_not_exist' => 'İstediğiniz sayfa mevcut değil. Lütfen yanlış URL\'yi girmediğinizi kontrol edin. Yazım hatası mı yaptınız?',
    '404_send_error'          => 'Bu sayfaya otomatik olarak yönlendirildiyseniz lütfen özürlerimi kabul edin. Günlük dosyalarınızda bu hatadan bahsediliyor ve hatayı bana gönderirseniz minnettar olurum.',
    '404_github_link'         => 'Bu sayfanın mevcut olması gerektiğinden eminseniz, lütfen bir bilet açın <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'whoops'                  => 'Hayda',
    'fatal_error'             => 'Ölümcül bir hata vardı. Neler olduğunu görmek için lütfen "storage/ logs" içindeki günlük dosyalarını kontrol edin veya "docker logs -f [container]" kullanın.',
    'maintenance_mode'        => 'Firefly III bakım modunda.',
    'be_right_back'           => 'Hemen dönecek!',
    'check_back'              => 'Firefly III gerekli bakım için hazır. Lütfen bir saniye sonra tekrar kontrol edin.',
    'error_occurred'          => 'Hoppala! Bir hata oluştu.',
    'error_not_recoverable'   => 'Ne yazık ki, bu hata kurtarılamadı :(. Ateşböceği III kırıldı. Hata şu şekildedir:',
    'error'                   => 'Hata',
    'error_location'          => 'Bu hata dosyada oluştu<span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'              => 'Yığın izleme',
    'more_info'               => 'Daha çok bilgi',
    'collect_info'            => 'Lütfen günlük dosyalarını bulacağınız <code>storage/logs</code> dizininde daha fazla bilgi toplayın. Eğer Docker kullanıyorsanız, <code>docker logs -f [container]</code> komutunu kullanın.',
    'collect_info_more'       => 'Hata bilgilerini toplama hakkında daha fazla bilgi için <a href="https://docs.firefly-iii.org/faq/other#how-do-i-enable-debug-mode ">the FAQ</a>.',
    'github_help'             => 'Github\'dan yardım alın',
    'github_instructions'     => 'Yeni bir sayı açmaktan memnuniyet duyarız<strong><a href="https://github.com/firefly-iii/firefly-iii/issues">on GitHub</a></strong>.',
    'use_search'              => 'Aramayı kullan!',
    'include_info'            => 'Bilgileri ekleyin<a href=":link">bu hata ayıklama sayfasından</a>.',
    'tell_more'               => 'Bize daha fazlasını anlat "diyor Whoops!"',
    'include_logs'            => '(Bakınız) hata günlükleri vardır.',
    'what_did_you_do'         => 'Bize ne yaptığınızI anlatın.',
    'offline_header'          => 'Muhtemelen çevrimdışısınız',
    'offline_unreachable'     => 'Firefly III\'e ulaşılamıyor. Cihazınız şu anda çevrimdışı veya sunucu çalışmıyor.',
    'offline_github'          => 'Hem cihazınızın hem de sunucunuzun çevrimiçi olduğundan eminseniz, lütfen bir bilet açın<strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',

];
