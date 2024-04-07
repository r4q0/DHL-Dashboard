<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DHL Dashboard</title>
</head>

<body class="m-5 h-screen text-slate-400 bg-slate-900">
   <button onclick="location.href='{{route('create')}}';"  type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none  focus:ring-blue-800 shadow-lg shadow-blue-800/80 rounded-lg text-2xl px-3 py-1 font-black text-center me-2 mb-2 ">&plus;</button>   
    <div class="flex justify-center antialiased text-slate-400 bg-slate-900">
    <div class="grid grid-cols-1 gap-10">
        @foreach ($orders as $order)
            <div class="hover:cursor-pointer   py-2 px-5 font-mono font-medium text-xs leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10">
                <h1  class="py-2 pr-2 text-center font-mono font-semibold text-3xl leading-6 text-sky-500 whitespace-nowrap text-sky-400">{{ $order->name }}</h1>
                <p class="text-center text-2xl p-1 font-mono whitespace-pre text-indigo-300 leading-6 text-gray-500">{{ $order->tracking_number }} {{ $order->zipcode }}</p>
            </div>
        @endforeach
    </div>
</div>
</body>

</html>
