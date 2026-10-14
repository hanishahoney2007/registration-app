<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Dashboard
    </title>

    @vite([
    'resources/css/app.css',
    'resources/js/app.js'
    ])

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>


<body class="bg-slate-100 text-slate-800">


    <div class="min-h-screen flex">


        {{-- ======================================================
         LEFT PANEL
    ======================================================= --}}

        @include('layouts.leftpanel')


        {{-- ======================================================
         MAIN AREA
    ======================================================= --}}

        <div class="flex-1 min-w-0">


            {{-- ==================================================
             HEADER
        =================================================== --}}

            @include('layouts.header')


            {{-- ==================================================
             PAGE CONTENT
        =================================================== --}}

            <main class="p-4 sm:p-6 lg:p-8">


                {{-- =================================================
                 SUMMARY CARDS
            ================================================== --}}

                <div class="grid grid-cols-1
                        sm:grid-cols-2
                        xl:grid-cols-3
                        gap-4 mb-6">


                    <!-- Cars in service -->

                    <div class="bg-white rounded-xl
                            border border-slate-200 p-5">

                        <div class="flex items-center
                                justify-between">

                            <div>

                                <p class="text-sm text-slate-500">
                                    Cars in service
                                </p>

                                <h3 class="text-3xl font-bold mt-2">
                                    14
                                </h3>

                            </div>

                            <div class="w-12 h-12 rounded-xl
                                    bg-blue-50 text-blue-600
                                    flex items-center justify-center">

                                🚗

                            </div>

                        </div>

                        <p class="text-xs text-green-600 mt-3">
                            +8.2% from last month
                        </p>

                    </div>


                    <!-- Awaiting approval -->

                    <div class="bg-white rounded-xl
                            border border-slate-200 p-5">

                        <div class="flex items-center
                                justify-between">

                            <div>

                                <p class="text-sm text-slate-500">
                                    Awaiting approval
                                </p>

                                <h3 class="text-3xl font-bold mt-2">
                                    11
                                </h3>

                            </div>

                            <div class="w-12 h-12 rounded-xl
                                    bg-amber-50 text-amber-600
                                    flex items-center justify-center">

                                ⏳

                            </div>

                        </div>

                        <p class="text-xs text-amber-600 mt-3">
                            Requires attention
                        </p>

                    </div>


                    <!-- Completed repairs -->

                    <div class="bg-white rounded-xl
                            border border-slate-200 p-5">

                        <div class="flex items-center
                                justify-between">

                            <div>

                                <p class="text-sm text-slate-500">
                                    Completed repairs
                                </p>

                                <h3 class="text-3xl font-bold mt-2">
                                    42
                                </h3>

                            </div>

                            <div class="w-12 h-12 rounded-xl
                                    bg-green-50 text-green-600
                                    flex items-center justify-center">

                                ✓

                            </div>

                        </div>

                        <p class="text-xs text-green-600 mt-3">
                            +12.5% from last month
                        </p>

                    </div>

                </div>


                {{-- =================================================
                 CHARTS
            ================================================== --}}

                <div class="grid grid-cols-1
                        xl:grid-cols-2
                        gap-6 mb-6">


                    <!-- Service Chart -->

                    <div class="bg-white rounded-xl
                            border border-slate-200 p-5">

                        <div class="flex items-center
                                justify-between mb-5">

                            <div>

                                <h3 class="font-semibold">
                                    Bookings by service type
                                </h3>

                                <p class="text-sm text-slate-500">
                                    Service distribution
                                </p>

                            </div>

                            <select class="border rounded-lg
                                   px-3 py-2 text-sm">

                                <option>2025</option>
                                <option>2024</option>
                                <option>2023</option>

                            </select>

                        </div>


                        <div class="h-64">

                            <canvas id="serviceChart"></canvas>

                        </div>

                    </div>


                    <!-- Revenue Chart -->

                    <div class="bg-white rounded-xl
                            border border-slate-200 p-5">

                        <div class="flex items-center
                                justify-between mb-5">

                            <div>

                                <h3 class="font-semibold">
                                    Monthly revenue
                                </h3>

                                <p class="text-sm text-slate-500">
                                    Revenue overview
                                </p>

                            </div>

                            <select class="border rounded-lg
                                   px-3 py-2 text-sm">

                                <option>2025</option>
                                <option>2024</option>
                                <option>2023</option>

                            </select>

                        </div>


                        <div class="h-64">

                            <canvas id="revenueChart"></canvas>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                 REPAIR ORDERS
            ================================================== --}}

                <div class="bg-white rounded-xl
                        border border-slate-200">


                    <div class="p-5 border-b
                            border-slate-200">

                        <div class="flex flex-col
                                lg:flex-row
                                lg:items-center
                                lg:justify-between
                                gap-4">

                            <div>

                                <h3 class="text-lg font-semibold">
                                    Repair orders
                                </h3>

                                <p class="text-sm text-slate-500">
                                    Manage your latest repair orders
                                </p>

                            </div>


                            <div class="flex gap-3">

                                <input type="text" id="searchOrders" placeholder="Search..." class="w-full sm:w-52
                                       pl-3 pr-3 py-2
                                       border rounded-lg
                                       text-sm">


                                <button class="bg-blue-600
                                       hover:bg-blue-700
                                       text-white
                                       px-4 py-2
                                       rounded-lg
                                       text-sm whitespace-nowrap">

                                    + New Booking

                                </button>

                            </div>

                        </div>


                        {{-- Filters --}}

                        <div class="flex flex-wrap
                                gap-2 mt-4">

                            <select class="border rounded-lg
                                       px-3 py-2 text-sm">

                                <option>
                                    October 2025
                                </option>

                                <option>
                                    September 2025
                                </option>

                            </select>


                            <select class="border rounded-lg
                                       px-3 py-2 text-sm">

                                <option>
                                    All services
                                </option>

                                <option>
                                    Diagnostics
                                </option>

                                <option>
                                    Maintenance
                                </option>

                                <option>
                                    Repairs
                                </option>

                            </select>


                            <select class="border rounded-lg
                                       px-3 py-2 text-sm">

                                <option>
                                    All status
                                </option>

                                <option>
                                    Completed
                                </option>

                                <option>
                                    In progress
                                </option>

                                <option>
                                    Awaiting
                                </option>

                            </select>

                        </div>

                    </div>


                    {{-- Table --}}

                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead class="bg-slate-50">

                                <tr class="text-left text-slate-500">

                                    <th class="px-5 py-3">
                                        #
                                    </th>

                                    <th class="px-5 py-3">
                                        Customer
                                    </th>

                                    <th class="px-5 py-3">
                                        Order
                                    </th>

                                    <th class="px-5 py-3">
                                        Date
                                    </th>

                                    <th class="px-5 py-3">
                                        Status
                                    </th>

                                    <th class="px-5 py-3">
                                        Mechanic
                                    </th>

                                    <th class="px-5 py-3">
                                        Auto
                                    </th>

                                    <th class="px-5 py-3">
                                        Total
                                    </th>

                                </tr>

                            </thead>


                            <tbody id="ordersTable" class="divide-y
                                   divide-slate-100">


                                <tr class="order-row
                                   hover:bg-slate-50">

                                    <td class="px-5 py-4">
                                        1
                                    </td>

                                    <td class="px-5 py-4 font-medium">
                                        Anna Kowalska
                                    </td>

                                    <td class="px-5 py-4">
                                        #544
                                    </td>

                                    <td class="px-5 py-4">
                                        02.10.2024
                                    </td>

                                    <td class="px-5 py-4">

                                        <span class="px-2.5 py-1
                                           rounded-full
                                           text-xs
                                           bg-green-100
                                           text-green-700">

                                            Completed

                                        </span>

                                    </td>

                                    <td class="px-5 py-4">
                                        Novak
                                    </td>

                                    <td class="px-5 py-4">
                                        BMW X5
                                    </td>

                                    <td class="px-5 py-4 font-medium">
                                        $1450
                                    </td>

                                </tr>


                                <tr class="order-row
                                   hover:bg-slate-50">

                                    <td class="px-5 py-4">
                                        2
                                    </td>

                                    <td class="px-5 py-4 font-medium">
                                        Marek Winiarski
                                    </td>

                                    <td class="px-5 py-4">
                                        #545
                                    </td>

                                    <td class="px-5 py-4">
                                        05.10.2024
                                    </td>

                                    <td class="px-5 py-4">

                                        <span class="px-2.5 py-1
                                           rounded-full
                                           text-xs
                                           bg-amber-100
                                           text-amber-700">

                                            In Progress

                                        </span>

                                    </td>

                                    <td class="px-5 py-4">
                                        Zakari
                                    </td>

                                    <td class="px-5 py-4">
                                        Toyota
                                    </td>

                                    <td class="px-5 py-4 font-medium">
                                        $1150
                                    </td>

                                </tr>


                                <tr class="order-row
                                   hover:bg-slate-50">

                                    <td class="px-5 py-4">
                                        3
                                    </td>

                                    <td class="px-5 py-4 font-medium">
                                        Zita Lewandowska
                                    </td>

                                    <td class="px-5 py-4">
                                        #546
                                    </td>

                                    <td class="px-5 py-4">
                                        06.10.2024
                                    </td>

                                    <td class="px-5 py-4">

                                        <span class="px-2.5 py-1
                                           rounded-full
                                           text-xs
                                           bg-red-100
                                           text-red-700">

                                            Awaiting

                                        </span>

                                    </td>

                                    <td class="px-5 py-4">
                                        Kowalczyk
                                    </td>

                                    <td class="px-5 py-4">
                                        Opel Corsa
                                    </td>

                                    <td class="px-5 py-4 font-medium">
                                        $1420
                                    </td>

                                </tr>


                            </tbody>

                        </table>

                    </div>


                    {{-- Pagination --}}

                    <div class="px-5 py-4 border-t
                            flex items-center
                            justify-between">

                        <p class="text-sm text-slate-500">
                            Showing 1 to 3 of 42 orders
                        </p>

                        <div class="flex gap-2">

                            <button class="px-3 py-2 border
                                   rounded-lg text-sm">

                                Previous

                            </button>

                            <button class="px-3 py-2
                                   bg-blue-600
                                   text-white
                                   rounded-lg text-sm">

                                1

                            </button>

                            <button class="px-3 py-2 border
                                   rounded-lg text-sm">

                                2

                            </button>

                            <button class="px-3 py-2 border
                                   rounded-lg text-sm">

                                Next

                            </button>

                        </div>

                    </div>

                </div>


            </main>


            {{-- ==================================================
             FOOTER
        =================================================== --}}

            @include('layouts.footer')


        </div>

    </div>


</body>

</html>