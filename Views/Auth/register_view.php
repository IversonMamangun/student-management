<?php 
require_once '../../Views/Partials/header.php';

?>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="mx-auto h-10 w-auto" />
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Register Form</h2>
  </div>
<div class="mt-12 sm:mx-auto sm:w-full sm:max-w-2xl">
  <form action="/student_management/Controllers/Auth/register.php" method="POST" class="grid grid-cols-1 gap-6 sm:grid-cols-2">

    <!-- Email -->
    <div>
      <label for="email" class="block text-l font-medium text-gray-100">Email address</label>
      <div class="mt-2">
        <input id="email" type="email" name="email" required autocomplete="email" maxlength="30"
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- Password -->
    <div>
      <label for="password" class="block text-l font-medium text-gray-100">Password</label>
      <div class="mt-2">
        <input id="password" type="password" name="password" required autocomplete="current-password" min="8"
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- First Name -->
    <div>
      <label for="fullname" class="block text-l font-medium text-gray-100">Full Name</label>
      <div class="mt-2">
          <input id="fullname" type="text" name="fullname" required maxlength="20"
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>


    <!-- Gender -->
    <div>
      <label for="gender" class="block text-lg font-medium text-gray-100">Gender</label>
      <div class="mt-2">
        <select id="gender" name="gender" required
          class="block w-full rounded-md bg-gray-800 px-3 py-1.5 text-base text-white 
          outline-1 outline-gray-600 placeholder:text-gray-500 
          focus:outline-2 focus:outline-indigo-400 sm:text-lg">
          <option value="" disabled selected>Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Prefer not to say">Prefer not to say</option>
        </select>
      </div>
    </div>

    <!-- Date of Birth -->
    <div>
      <label for="birth_date" class="block text-l font-medium text-gray-100">Date of Birth</label>
      <div class="mt-2">
        <input id="birth_date" type="date" name="birth_date" required
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- Course -->
    <!-- <div>
      <label for="course" class="block text-l font-medium text-gray-100" maxlength="68">Course</label>
      <div class="mt-2">
        <input id="course" type="text" name="course" required
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div> -->

    <!-- Year Level -->
    <div>
      <label for="role" class="block text-l font-medium text-gray-100">Roles</label>
      <div class="mt-2">
        <select id="role" name="role" required 
          class="block w-full rounded-md bg-gray-800 px-3 py-1.5 text-base text-white 
          outline-1 outline-gray-600 placeholder:text-gray-500 
          focus:outline-2 focus:outline-indigo-400 sm:text-l">
          <option value="" disabled selected>Select Role</option>
          <option value="staff">Staff</option>
          <option value="admin">Admin</option>
          <option value="teachers">Teachers</option>
        </select>
      </div>
    </div>


    <!-- Submit Button (span full width) -->
    <div class="sm:col-span-2">
      <button type="submit"
        class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-l font-semibold text-white 
        hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
        Register
      </button>
    </div>

  </form>
</div>
