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
                        <a href="<?= base_url('logout')?>" onclick="return confirm('Yakin ingin keluar?')" class="no-underline">
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
                    <div class="flex flex-row md:mt-3">
                        <div class="basis-1/3 mt-1 mx-2 lg:mx-0"></div>
                        <div class="basis-1/3 mt-1 md:mt-0 text-center text-biru-gelap">
                            <div
                                class="bg-tombol w-12 h-12 md:w-14 md:h-14 lg:w-12 lg:h-12 rounded-full flex justify-center items-center m-auto mt-1 md:mt-0 border-solid border-2 border-blue-900">
                                <p class="font-bold text-blue-900"><?= $number ?></p>
                            </div>
                        </div>
                        <div class="basis-1/3 text-right mt-1 mx-2 lg:mx-0"></div>
                    </div>
                    <div
                        class="flex flex-col items-center text-center md:mt-7 lg:mt-7">
                        <div class="w-80 md:w-[600px] lg:w-96 h-64 md:h-80 lg:h-64 mt-5 rounded-xl font-bold justify-center items-center text-center md:text-xl lg:text-base flex flex-col">
                            <!-- <img class="w-[180px] md:w-[250px] mt-10 md:mt-16 lg:w-[180px]" src="./img/logo.png" /> -->
                            <p class="mt-5"><?= $question->question ?></p>
                        </div>  
                        <div class="mt-7 lg:mt-14 lg:mb-10 flex flex-col gap-3 text-white text-sm">
                            <?php
                                $option_answer = array(
                                    array("answer" => $question->option_1, "option" => "option_1"),
                                    array("answer" => $question->option_2, "option" => "option_2"),
                                    array("answer" => $question->option_3, "option" => "option_3"),
                                    array("answer" => $question->option_4, "option" => "option_4")
                                );
                                shuffle($option_answer);
                            ?>
                            <?php foreach ($option_answer as $opsi) : ?>
                                <button data-id="<?= $question->idquestion ?>" data-opsi="<?= $opsi['option'] ?>" class="answer bg-biru-gelap hover:bg-tombol hover:text-black w-80 md:w-[600px] lg:w-96 h-12 md:h-16 lg:h-12 font-bold md:text-base lg:text-sm rounded-full md:my-1 no-underline flex items-center justify-center text-white"><?= $opsi['answer'] ?></button>
                            <?php endforeach; ?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>            
            var answers = document.querySelectorAll(".answer");
            answers.forEach(function(answer) {
                answer.addEventListener("click", function() {
                    var dataId = answer.getAttribute("data-id");
                    var dataOpsi = answer.getAttribute("data-opsi");
                    answers.forEach(function(btn) {
                        btn.disabled = true;
                    });

                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "<?= base_url('question'); ?>", true);
                    xhr.setRequestHeader("Content-Type", "application/json");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            var response = JSON.parse(xhr.responseText);
                            var correct = response.correct;
                            var wrong = response.wrong;

                            if (wrong == null) {
                                var buttonCorrect = document.querySelector(`button[data-opsi="${correct}"]`);
                                buttonCorrect.classList.remove('bg-white');
                                buttonCorrect.classList.remove('hover:bg-slate-200');
                                buttonCorrect.classList.add('bg-green-500');
                                buttonCorrect.classList.add('hover:bg-green-600');

                                setTimeout(() => location.reload(), 500);
                            }else if(wrong != null){
                                var buttonCorrect = document.querySelector(`button[data-opsi="${correct}"]`);
                                buttonCorrect.classList.remove('bg-white');
                                buttonCorrect.classList.remove('hover:bg-slate-200');
                                buttonCorrect.classList.add('bg-green-500');
                                buttonCorrect.classList.add('hover:bg-green-600');

                                var buttonWrong = document.querySelector(`button[data-opsi="${wrong}"]`);
                                buttonWrong.classList.remove('bg-white');
                                buttonWrong.classList.remove('hover:bg-slate-200');
                                buttonWrong.classList.add('bg-red-400');
                                buttonWrong.classList.add('hover:bg-red-500');

                                setTimeout(() => { location.reload() || (window.location.href = 'score') }, 1000);
                            }
                        }
                    };
                    var data = JSON.stringify({ dataId: dataId, dataOpsi: dataOpsi });
                    xhr.send(data);
                });
            });
        </script>
    </body>
</html>