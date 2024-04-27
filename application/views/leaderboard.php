<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Game</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>

<body class="font-jakarta m-0 bg-custom md:bg-custom lg:bg-custom bg-cover h-screen bg-no-repeat" style="background-attachment: fixed;">
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
                <div class="basis-1/3 text-right mt-1 mx-2 lg:mx-0"></div>
            </div>
            <div>
                <div class="grid grid-cols-1 justify-center items-center text-center">
                    <div></div>
                    <div class="">
                        <p class="text-center text-biru-gelap font-extrabold text-2xl md:text-4xl lg:text-4xl lg:mt-16"> LEADERBOARD </p>
                        <div class="grid gap-x-2 grid-cols-5 md:grid-cols-7 lg:grid-cols-9 text-center mt-8">
                            <div></div>
                            <div class="hidden lg:block"></div>
                            <div class="hidden md:block"></div>
                            <div class="flex flex-col-reverse">
                                <div class="bg-biru-gelap justify-center items-center flex rounded-t-2xl h-20 md:h-32 lg:h-36">
                                    <p class="font-extrabold text-2xl md:text-3xl lg:text-2xl text-white">3</p>
                                </div>
                                <p class="uppercase text-biru-gelap font-bold text-sm md:text-lg"><?= empty($ranking[2]) ? '-' : $ranking[2]->username ?></p>
                            </div>
                            <div class="flex flex-col-reverse">
                                <div
                                    class="bg-biru-gelap justify-center items-center flex rounded-t-2xl h-40 md:h-64 lg:h-72">
                                    <p class="font-extrabold text-2xl md:text-3xl lg:text-2xl text-white">1</p>
                                </div>
                                    <p class="uppercase text-biru-gelap font-bold text-sm md:text-lg"><?= empty($ranking[0]) ? '-' : $ranking[0]->username ?></p>
                            </div>
                            <div class="flex flex-col-reverse">
                                <div
                                    class="bg-biru-gelap justify-center items-center flex rounded-t-2xl h-32 md:h-48 lg:h-52">
                                    <p class="font-extrabold text-2xl md:text-3xl lg:text-2xl text-white">2</p>
                                </div>
                                    <p class="uppercase text-biru-gelap font-bold text-sm md:text-lg"><?= empty($ranking[1]) ? '-' : $ranking[1]->username ?></p>
                            </div>
                            <div></div>
                            <div class="hidden lg:block"></div>
                            <div class="hidden md:block"></div>
                        </div>
                
                        <div class="flex flex-col items-center lg:h-screen text-center">
                            <div class="bg-white w-full md:w-[720px] h-screen mt-10 md:mt-6 lg:mt-10 pb-6 md:pb-10 lg:pb-6 mx-0 md:px-12 lg:mx-0 rounded-t-xl md:rounded-3xl md:text-xl lg:text-base">
                                <p class="font-bold text-biru-gelap text-lg mt-10 mb-5 md:mt-16 md:mb-8 md:text-3xl lg:text-lg lg:mt-10 lg:mb-5 tracking-widest">RANKS</p>
                                <?php if (empty($ranking)) : ?>
                                    Tidak Ada Data
                                <?php else: ?>
                                    <?php $no=1; foreach ($ranking as $key => $value) : ?>
                                    <div class="bg-biru-gelap text-white mx-8 my-2 md:my-3 md:mx-12 lg:-mx-2 lg:my-2 rounded-xl">
                                        <div class="justify-between flex px-3 font-bold">
                                            <p><?= $no++ ?>. <?= $value->username ?></p>
                                            <p><?= $value->score ?> Pts</p>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                <?php endif?>
                               <p class="mt-8"> ----------------------------------</p>
                            </div>
                        </div>
                    </div>
                    <div></div>
                </div>  
            </div>
        </div>
    </div>
</body>

</html>
