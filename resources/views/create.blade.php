<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DHl Dashboard</title>
</head>

<body class="m-5 h-screen text-slate-400 bg-slate-900 overflow-hidden ">
    <button onclick="location.href='{{route('welcome')}}';"  type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none  focus:ring-blue-800 shadow-lg shadow-blue-800/80 rounded-lg text-lg lg:text-2xl px-3 py-1 font-black text-center me-2 mb-2 ">Back</button>   
    <div class="flex items-center justify-center overflow-hidden m-5 text-slate-400 bg-slate-900">
    <div class="hover:cursor-pointer font-mono font-medium leading-6 text-sky-500 hover:font-black whitespace-nowrap hover:border-slate-200 text-sky-400 border border-slate-100 dark:border-slate-400/10 text-center font-mono font-semibold text-lg md:text-3xl leading-6 text-sky-500 whitespace-nowrap text-sky-400 text-center  m-5 p-20 rounded-lg">
        <form action="" method="post">
            @csrf
            <input type="text" placeholder="name" name="name"
                class="border border-gray-300 m-4 mt-0 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            <br>
            <input type="text" placeholder="tracking code" name="tracking_number"
                class="border border-gray-300 m-4 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            <br>
            <input type="text" placeholder="zipcode" name="zipcode"
                class="border border-gray-300 m-4 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            <br>
            <input type="submit" name="submit" value="Submit"
                class="bg-indigo-500 text-xl m-4 mb-0 hover:ring-indigo-800 hover:opacity-80 text-white font-bold py-2 px-4 rounded-lg cursor-pointer">
        </form>
    </div>
</div>