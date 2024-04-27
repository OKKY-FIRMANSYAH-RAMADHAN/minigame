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
                    <a href="<?= base_url()?>" class="no-underline">
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
                <div class="basis-1/3 text-right mt-1 mx-2 lg:mx-0">
                    <a href="<?= base_url('leaderboard')?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fill-biru-gelap" width="35"
                        height="35">
                            <path
                                d="M400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H24C10.7 64 0 74.7 0 88c0 92.6 33.5 157 78.5 200.7c44.3 43.1 98.3 64.8 138.1 75.8c23.4 6.5 39.4 26 39.4 45.6c0 20.9-17 37.9-37.9 37.9H192c-17.7 0-32 14.3-32 32s14.3 32 32 32H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H357.9C337 448 320 431 320 410.1c0-19.6 15.9-39.2 39.4-45.6c39.9-11 93.9-32.7 138.2-75.8C542.5 245 576 180.6 576 88c0-13.3-10.7-24-24-24H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zM48.9 112h84.4c9.1 90.1 29.2 150.3 51.9 190.6c-24.9-11-50.8-26.5-73.2-48.3c-32-31.1-58-76-63-142.3zM464.1 254.3c-22.4 21.8-48.3 37.3-73.2 48.3c22.7-40.3 42.8-100.5 51.9-190.6h84.4c-5.1 66.3-31.1 111.2-63 142.3z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                <div class="flex flex-col items-center text-center h-screen text-biru-gelap">
                <p
                        class="mt-16 text-[16px] lg:text-3xl md:text-3xl font-jakarta font-bold uppercase tracking-widest">
                        Balai Pengembangan Kompetensi <br class="hidden lg:inline"> Kementerian PUPR Wilayah VI Surabaya</p>
                    <p class="text-5xl md:text-7xl lg:text-6xl mt-4 font-jakarta font-extrabold tracking-wide">MINIGAMES</p>
                    <img class="w-[280px] md:w-[400px] lg:w-[370px]"
                        src="<?= base_url('assets/images/logo.png')?>" />
                    <a href="<?= base_url('start')?>"
                        class="bg-tombol hover:bg-tekan text-blue-900 font-bold py-2 px-8 md:py-4 md:px-16 lg:py-3 lg:px-16 rounded-full mt-9 md:mt-16 text-base md:text-lg lg:text-base no-underline border-solid border-4 border-blue-900">
                        GET STARTED
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
