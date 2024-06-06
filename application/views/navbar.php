<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- End Flowbite CSS -->
    <!-- Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- End Recaptcha -->
    <!-- Title -->
    <title>Data Center Presence</title>
    <!-- End Title -->
</head>
<body class="flex flex-col relative min-h-screen">
<div class="flex-grow pb-16">
        <!-- Awal Navbar -->
        <nav class="bg-green-500 border-gray-200 dark:bg-gray-900">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="/PresensiDC/img/uinlogo.png" class="h-14 shadow-sm bg-white" alt="uinlogo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white text-white">Data Center UIN Raden Mas Said Surakarta</span>
        </a>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-green-500 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-green-500 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
              <a href="<?php echo base_url('Home/homepage'); ?>" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 md:text-white dark:hover:bg-gray-700 md:dark:text-white dark:hover:text-white md:dark:hover:bg-transparent">Homepage</a>
            </li>
          <li>
              <a href="<?php echo base_url('Home/presensi'); ?>" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 md:text-white dark:hover:bg-gray-700 md:dark:text-white dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Presensi</a>
            </li>
            <li>
            <a href="<?php echo base_url('Home/about'); ?>" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 md:text-white dark:hover:bg-gray-700 md:dark:text-white dark:hover:text-white md:dark:hover:bg-transparent">About</a>
            </li>
            <li>
              <a href="<?php echo base_url('Home/contact'); ?>" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 md:text-white dark:hover:bg-gray-700 md:dark:text-white dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->