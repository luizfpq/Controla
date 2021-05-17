<x-app-layout>
    <script>
        function startTime() {

            var today = new Date();
            var wd = today.getDay();
            var dd = today.getDate();
            var mm = today.getMonth();
            var yy = today.getFullYear();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);

            switch (wd) {
                case 0:
                    wd = 'Domingo - ';
                    break;
                case 1:
                    wd = 'Segunda-feira - ';
                    break;
                case 2:
                    wd = 'Terça-feira - ';
                    break;
                case 3:
                    wd = 'Quarta-feira - ';
                    break;
                case 4:
                    wd = 'Quinta-feira - ';
                    break;
                case 5:
                    wd = 'Sexta-feira - ';
                    break;
                case 6:
                    wd = 'Sábado - ';
                    break;
                default:
                    wd = '';
            }


            document.getElementById('date_message').innerHTML =
                wd  + dd + "/" + mm + "/" + yy + " - " + h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 1000);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }

        window.onload = startTime();
    </script>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div id="date_message"></div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Bem vindo(a) {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>