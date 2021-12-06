<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jitsi Project</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src='https://meet.jit.si/external_api.js'></script>
    <style>
        html,
        body,
        #jaas-container {
            height: 100%;
        }

    </style>

    <script type="text/javascript">
        /*window.onload = () => {
                                                                            const api = new JitsiMeetExternalAPI("8x8.vc", {
                                                                                roomName: "vpaas-magic-cookie-d7944c589d2d49e5af719130ee147384/SampleAppTinyNurseriesFreeLovingly",
                                                                                parentNode: document.querySelector('#jaas-container'),
                                                                                configOverwrite: {
                                                                                    defaultLanguage: 'pt'
                                                                                }
                                                                            });
                                                                        };*/
    </script>



    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .close-icon-container .close-icon {
            display: inline-block;
            height: 40px;
            width: 40px;
            cursor: pointer;
            stroke: #fff;
        }

        .close-icon-container .close-icon .circle {
            opacity: 0.1;
        }

        .close-icon-container .close-icon .progress {
            opacity: 0;
            stroke-dasharray: 0, 120;
            transition: 0.5s cubic-bezier(0.165, 0.775, 0.145, 1.02);
        }

        .close-icon-container:hover .close-icon .progress {
            opacity: 1;
            stroke-dasharray: 25, 120;
        }

        .close-icon-container .close-icon:hover .progress {
            opacity: 1;
            stroke-dasharray: 90, 120;
        }

        .close-icon-container .close-icon:active .progress,
        .close-icon-container .close-icon.clicked .progress {
            stroke-dasharray: 120, 120;
        }

        .close-icon-container .close-icon.clicked .progress {
            opacity: 1;
        }

    </style>
</head>

<body class="antialiased dark:bg-gray-900">
    <div
        class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <!--
        <div class="self-start" style="margin-left: 2.5%">
            <a href="/" class="flex justify-center self-middle my-3">
                <img src="https://img.icons8.com/ios-filled/50/000000/long-arrow-left.png" class="w-6 h-6" style="filter: invert(1)"/>
                <h1 class="text-white font-bold mx-2">
                    Voltar
                </h1>
            </a>
        </div>
        -->
        <div class="box-content" style="width: 95%; height: 90vh!important">
            <div class="dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="height: 100%!important">
                <div class="grid grid-cols-1 bg-gray-300 min-h-full">
                    <!--
                    <div class="bg-white col-span-2 shadow rounded m-3 align-middle">
                        <div class="flex min-width-full m-3 justify-center">
                            <div class="rounded-full bg-blue-600 h-40 w-40 flex items-center justify-center">
                                Avatar
                            </div>
                        </div>
                        <div class="flex min-width-full mx-3 justify-center">
                            <h1 class="text-gray-800 bold" style="font-size: 2rem">
                                Bem-vindo novamente, Yago!
                            </h1>
                        </div>
                        <div class="flex min-width-full justify-center">
                            <p class="text-gray-500">
                                Psicólogo, CRP 15/2911
                            </p>
                        </div>
                        <div class="grid grid-cols-3 min-w-full m-5">
                            <div class="min-h-full min-w-full bg-gray-100 rounded shadow">
                                <div class="m-5 flex justify-center">
                                    <h1 class="text-gray-800 font-bold" style="font-size: 1.25rem">
                                        Atendimentos realizados
                                    </h1>
                                </div>
                                <div class="flex justify-center my-5">
                                    <h1 class="text-gray-800 font-bold" style="font-size: 5rem">
                                        81
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="bg-white m-3 shadow rounded">
                        <div class="flex flex-col">
                            <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <div
                                            class="shadow overflow-hidden border-b border-gray-200 flex justify-center">
                                            <h6 class="uppercase text-md m-1 font-bold text-gray-600 tracking-wider">
                                                Reuniões marcadas</h6>
                                        </div>
                                        <table class="min-w-full divide-y divide-gray-200" style="overflow-y: scroll">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Nome
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Título
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Data e horário
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Status
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Link
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200" style="overflow-y: scroll">
                                                @foreach ($salas as $sala)
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-10 w-10">
                                                                    <!-- <img class="h-10 w-10 rounded-full"
                                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                                    alt=""> -->
                                                                </div>
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                        {{ $sala->proprietario }}
                                                                    </div>
                                                                    <!--  <div class="text-sm text-gray-500">
                                                                    larissa@gmail.com
                                                                </div> -->
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">{{ $sala->nome }}
                                                            </div>
                                                            <!-- <div class="text-sm text-gray-500">Psicólogo</div> -->
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">
                                                                {{ date('d/m/Y', strtotime($sala->created_at)) }}
                                                            </div>
                                                            <!-- <div class="text-sm text-gray-500 align-center">às 10h30
                                                        </div> -->
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            @if ($sala->status == 'A')
                                                                <span
                                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                                    Disponível
                                                                </span>
                                                            @endif
                                                            @if ($sala->status == 'F')
                                                                <span
                                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                                    Não disponível
                                                                </span>
                                                            @endif
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            <a href="#" onclick="entrar_sala('{{ $sala->id }}')"
                                                                class="text-indigo-600 hover:text-indigo-900">
                                                                <abbr title="A reunião está disponível"
                                                                    style="text-decoration: none">
                                                                    Entrar
                                                                </abbr>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
