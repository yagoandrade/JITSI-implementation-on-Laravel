<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<?php $roomName = "vpaas-magic-cookie-53ebc0c4a3a14596b059ecc72efc122d/SampleAppStrikingCyclesBreatheThankfully" ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jitsi Project</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src='https://meet.jit.si/external_api.js'></script>
    <style>
        html,
        body,
        #jaas-container {
            height: 100%;
        }
    </style>

    <script type="text/javascript">
        window.onload = () => {
            const api = new JitsiMeetExternalAPI("8x8.vc", {
                roomName: "vpaas-magic-cookie-53ebc0c4a3a14596b059ecc72efc122d/SampleAppStrikingCyclesBreatheThankfully",
                parentNode: document.querySelector('#jaas-container'),
                configOverwrite: {
                    defaultLanguage: 'pt'
                }
            });
        };
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
    <div class="flex min-w-full min-h-full justify-center hidden" id="alertCopy" style="position: absolute">
        <div class="mb-5" style="position: fixed; bottom: 0; z-index: 1000; width: 50%">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Link copiado!</strong>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <a style-="cursor: pointer" onclick="alertCopy();">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </div>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="box-content p-4" style="width: 95%; height: 800px!important">
            <div class="w-full pr-3 flex flex-wrap justify-between ">
                <div class="flex">
                    <button class="text-pink-500 background-transparent font-bold uppercase px-3 py-1 text-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button" onclick="showCreateRoomModal();">
                        Criar uma sala
                    </button>
                </div>
                <div class="flex">
                    <p class="text-right text-gray-500 text-md self-center">
                        Já tem um link?
                    </p>
                    <button class="text-pink-500 background-transparent font-bold uppercase px-3 py-1 text-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button" onclick="showLinkModal();">
                        Entrar
                    </button>
                </div>
            </div>
            <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="height: 100%!important">
                <div id="jaas-container" class=""></div>
                <div id="jaas-connect" class="" style="height: 100%"></div>
            </div>
        </div>
    </div>

    <!-- Modal de criação de sala -->
    <div class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="createRoomModal">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="flex justify-center" style="height: 100vh">
                <div class="self-center inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full" style="height: fit-content; max-height: 90vh;">
                    <div>
                        <div class="ml-4 text-center text-sm text-gray-500 sm:text-left sm:ml-0">
                            <form class="px-8 pt-6">
                                <div class="mb-4">
                                    <div class="flex inline-block justify-between mb-2 select-all">
                                        <label class="block text-gray-700 text-md font-bold self-center" for="username">
                                            Crie uma sessão e receba o link
                                        </label>
                                        <div class="close-icon-container">
                                            <span class="close-icon closeCreate">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" enable-background="new 0 0 40 40">
                                                    <line x1="15" y1="15" x2="25" y2="25" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
                                                    <line x1="25" y1="15" x2="15" y2="25" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
                                                    <circle class="circle" cx="20" cy="20" r="19" opacity="0" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" fill="none"></circle>
                                                    <path d="M20 1c10.45 0 19 8.55 19 19s-8.55 19-19 19-19-8.55-19-19 8.55-19 19-19z" class="progress" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" fill="none"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <input class="shadow appearance-none border rounded w-full py-3 pl-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="createMeetingLink" type="text" placeholder="Gere um link da reunião" disabled>
                                </div>
                                <div class="bg-gray-50 pb-4 mt-3 sm:flex sm:flex-row-reverse">
                                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" onclick="gerarLink();">
                                        Gerar link
                                    </button>
                                    <button class="flex shadow text-purple-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline text-white font-bold py-2 px-4 mr-2 rounded" type="button" onclick="handleLoading('copy-load'); copiarLink(); openPopover(event,'popover-example-left')">
                                        <svg class="animate-spin h-5 w-5 mr-3 hidden" viewBox="0 0 24 24" id="copy-load">
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        Copiar link
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal do link -->
    <div class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="linkModal">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="flex justify-center" style="height: 100vh">
                <div class="self-center inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full" style="height: 33.3rem; max-height: 90vh; overflow-y: scroll">
                    <div>
                        <div class="ml-4 text-center text-sm text-gray-500 sm:text-left sm:ml-0">
                            <form class="px-8 pt-6" id="formLinkEntrar">
                                <div class="mb-4">
                                    <div class="flex inline-block justify-between mb-2">
                                        <label class="block text-gray-700 text-md font-bold self-center" for="username">
                                            Já tem um link? Insira-o abaixo e clique em "Entrar"
                                        </label>

                                        <div class="close-icon-container">
                                            <span class="close-icon closeLink">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" enable-background="new 0 0 40 40">
                                                    <line x1="15" y1="15" x2="25" y2="25" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
                                                    <line x1="25" y1="15" x2="15" y2="25" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
                                                    <circle class="circle" cx="20" cy="20" r="19" opacity="0" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" fill="none"></circle>
                                                    <path d="M20 1c10.45 0 19 8.55 19 19s-8.55 19-19 19-19-8.55-19-19 8.55-19 19-19z" class="progress" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" fill="none"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <input class="shadow appearance-none border rounded w-full py-3 pl-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="meetingLink" type="text" placeholder="Link da reunião">
                                </div>
                                <div class="bg-gray-50 pb-4 mt-3 sm:flex sm:flex-row-reverse">
                                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" id="meetingLinkButton" onclick="updateLink();">
                                        Entrar
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div>
                            <div class="flex flex-col">
                                <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                            <div class="shadow overflow-hidden border-b border-gray-200 flex justify-center">
                                                <h6 class="uppercase text-md m-1 font-bold text-gray-600 tracking-wider">Reuniões marcadas</h6>
                                            </div>
                                            <table class="min-w-full divide-y divide-gray-200" style="overflow-y: scroll">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Nome
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Título
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Data e horário
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Status
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Link
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200" style="overflow-y: scroll">
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-10 w-10">
                                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                                                </div>
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                        Drª. Larissa Manoela
                                                                    </div>
                                                                    <div class="text-sm text-gray-500">
                                                                        larissa@gmail.com
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">Psicanalista</div>
                                                            <div class="text-sm text-gray-500">Psicólogo</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">15/12/2021</div>
                                                            <div class="text-sm text-gray-500 align-center">às 10h30</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                                Disponível
                                                            </span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                                <abbr title="A reunião está disponível" style="text-decoration: none">
                                                                    Entrar
                                                                </abbr>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-10 w-10">
                                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                                                </div>
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                        Drª. Samuela Irving
                                                                    </div>
                                                                    <div class="text-sm text-gray-500">
                                                                        sa.irving@gmail.com
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">Psicóloga Cognitiva</div>
                                                            <div class="text-sm text-gray-500">Psicólogo</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">15/12/2021</div>
                                                            <div class="text-sm text-gray-500 align-center">às 10h30</div>
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                                Não disponível
                                                            </span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            <a href="javascript:void(0);" class="text-gray-600 hover:text-gray-900" style="cursor:help">
                                                                <abbr title="A reunião ainda não está disponível" style="text-decoration: none">
                                                                    Entrar
                                                                </abbr>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-10 w-10">
                                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                                                </div>
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                        Frank Silva
                                                                    </div>
                                                                    <div class="text-sm text-gray-500">
                                                                        frank@gmail.com
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-500">Cliente</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">15/12/2021</div>
                                                            <div class="text-sm text-gray-500 align-center">às 10h30</div>
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <a style="cursor: pointer" onclick="abrirSessão();">
                                                                <span class="px-2 inline-flex text-xs leading-5 font-bold rounded-full bg-blue-100 text-blue-800">
                                                                    Sessão disponível
                                                                </span>
                                                            </a>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                                <abbr title="Você pode iniciar a consulta com esse cliente agora" style="text-decoration: none">
                                                                    Iniciar consulta
                                                                </abbr>
                                                            </a>
                                                        </td>
                                                    </tr>
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
    </div>
</body>

<script>
    function showLinkModal() {
        var linkModal = document.getElementById("linkModal");
        linkModal.classList.toggle("hidden");
    }

    function showCreateRoomModal() {
        var createRoomModal = document.getElementById("createRoomModal");
        createRoomModal.classList.toggle("hidden");
    }

    function isLetter(str) {
        return str.length === 1 && str.match(/[a-z]/i);
    }

    function wait(ms) {
        var start = new Date().getTime();
        var end = start;
        while (end < start + ms) {
            end = new Date().getTime();
        }
    }

    function alertCopy() {
        var alert = document.getElementById("alertCopy");
        alert.classList.toggle("hidden");
    }

    function handleLoading(id) {
        var loadingIcon = document.getElementById(id);
        loadingIcon.classList.toggle("hidden");
    }

    function copiarLink() {
        var copyText = document.getElementById("createMeetingLink");
        //wait(1000); //1 second in milliseconds

        if (copyText.value !== '') {
            copyText.select();
            copyText.setSelectionRange(0, 99999);

            navigator.clipboard.writeText(copyText.value);

            alertCopy();
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'Você não gerou um link para ser copiado.',
                footer: '<a class="outline-none text-indigo-600 hover:text-indigo-900" style="cursor: pointer" onClick="gerarLink()">Clique aqui para gerar um link de sessão aleatório</a>'
            })
        }

        handleLoading('copy-load');
    }

    function gerarLink() {
        var meetingLink = document.getElementById("createMeetingLink");
        var link = "testeLink";
        meetingLink.value = link;
    }

    function updateLink() {
        /* 
        on first click:
            jaas-container = hidden
            exhibit widget to another session
            
        if invalid or empty -> show modal to say it is invalid
        */
        var input = document.getElementById("meetingLink").value;
        if (input === "") {
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'O campo de link não pode ser vazio!',
            })
            return;
        } else if ((isLetter(input.charAt(0)) === null) || (isLetter(input.charAt(0)) === false)) {
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'O campo de link deve ser preenchido com um link válido.',
            })
            return;
        } else {
            const container = document.getElementById("jaas-container");
            const connect = document.getElementById("jaas-connect");
            container.classList.add("hidden"); // Na primeira execução, esconde a reunião própria
            connect.classList.remove("hidden");
            $("#jaas-connect").load(input);

            /*container active = api.roomName;
            connect active = input;

            <
            div id = "jaas-container"
            class = "" > < /div> <
                div id = "jaas-connect"
            class = "" > < /div>*/

            showLinkModal();
        }
    }

    $(document).ready(function() {
        $('.closeLink').on('click', function() {
            $(this).addClass('clicked');
            showLinkModal();
        });

        // Get the input field
        var linkInput = document.getElementById("meetingLink");

        /*
        $("#formLinkEntrar").submit(function() {
            search($("#meetingLink").get(0));
            return false;
        });
        */

        // Execute a function when the user releases a key on the keyboard
        linkInput.addEventListener("keyup", function(event) {
            // Number 13 is the "Enter" key on the keyboard
            if (event.keyCode === 13) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("meetingLinkButton").click();
            }
        });
    });

    $(document).ready(function() {
        $('.closeCreate').on('click', function() {
            $(this).addClass('clicked');
            showCreateRoomModal();
        });
    });

    $(document).on('click', function(e) {
        if (!$(e.target).hasClass('close-icon-container') && $(e.target).closest('.close-icon-container').length == 0) {
            $('.close-icon').removeClass('clicked');
        }
    });
</script>

</html>