<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mini Game</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    </head>
    <body class="font-jakarta m-0 bg-custom md:bg-custom lg:bg-custom bg-cover h-screen overflow-hidden">
        <div class="container mx-auto">
            <div>
                <div class="flex flex-row md:mt-3">
                    <div class="basis-1/3 mt-1 mx-2 lg:mx-0">
                        <a href="<?= base_url() ?>" class="no-underline">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fill-biru-gelap"
                                width="35" height="35">
                                <path
                                    d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                            </svg>
                        </a>
                    </div>
                    <div class="basis-1/3 mt-1 md:mt-0 text-center text-biru-gelap">
                        <img class="w-[80px] md:w-[110px] lg:w-[120px]" src="<?= base_url('assets/images/logo_tulisan.png')?>" />
                    </div>
                    <div class="basis-1/3 text-right mt-1 mx-2 lg:mx-0"></div>
                </div>
                <div class="flex flex-col items-center text-center md:mt-10 lg:mt-10">
                    <p class="uppercase text-center text-biru-gelap font-extrabold text-3xl md:text-4xl lg:text-3xl tracking-widest">Total Poin</p>
                    <div class="bg-biru-gelap w-56 h-56 md:w-80 md:h-80 lg:w-56 lg:h-56 mt-5 rounded-full text-2xl md:text-3xl lg:text-2xl font-bold flex justify-center items-center text-center">
                        <p class="text-5xl text-white"><?= $score ?></p>
                    </div>            
                    <div class="mt-24 md:mt-20 lg:mt-24 lg:mb-10 flex flex-col gap-3 text-black text-sm">
                        <a href="<?= base_url('leaderboard')?>"
                            class="bg-tombol hover:bg-tekan w-56 md:w-[400px] lg:w-[400px] h-12 md:h-16 lg:h-12 font-extrabold md:text-xl lg:text-sm rounded-2xl md:mt-3 lg:mt-4 no-underline flex items-center justify-center text-blue-900 border-solid border-4 border-blue-900">LEADERBOARD</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>