<?php 
require_once '../../Views/Partials/header.php';

?>
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
      <label for="firstname" class="block text-l font-medium text-gray-100">First Name</label>
      <div class="mt-2">
          <input id="firstname" type="text" name="firstname" required maxlength="20"
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- Last Name -->
    <div>
      <label for="lastname" class="block text-l font-medium text-gray-100">Last Name</label>
      <div class="mt-2">
        <input id="lastname" type="text" name="lastname" required maxlength="20"
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
    <div>
      <label for="course" class="block text-l font-medium text-gray-100" maxlength="68">Course</label>
      <div class="mt-2">
        <input id="course" type="text" name="course" required
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- Year Level -->
    <div>
      <label for="year_level" class="block text-l font-medium text-gray-100">Year Level</label>
      <div class="mt-2">
        <select id="year_level" name="year_level" required 
          class="block w-full rounded-md bg-gray-800 px-3 py-1.5 text-base text-white 
          outline-1 outline-gray-600 placeholder:text-gray-500 
          focus:outline-2 focus:outline-indigo-400 sm:text-l">
          <option value="" disabled selected>Select Year Level</option>
          <option value="1">Year 1</option>
          <option value="2">Year 2</option>
          <option value="3">Year 3</option>
          <option value="4">Year 4</option>
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
