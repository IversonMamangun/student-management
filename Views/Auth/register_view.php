<?php 
require '../Views/Partials/header.php';

?>
<div class="mt-12 sm:mx-auto sm:w-full sm:max-w-2xl">
  <form action="#" method="POST" class="grid grid-cols-1 gap-6 sm:grid-cols-2">
    
    <!-- Email -->
    <div>
      <label for="email" class="block text-l font-medium text-gray-100">Email address</label>
      <div class="mt-2">
        <input id="email" type="email" name="email" required autocomplete="email"
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- Password -->
    <div>
      <label for="password" class="block text-l font-medium text-gray-100">Password</label>
      <div class="mt-2">
        <input id="password" type="password" name="password" required autocomplete="current-password"
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- First Name -->
    <div>
      <label for="firstName" class="block text-l font-medium text-gray-100">First Name</label>
      <div class="mt-2">
        <input id="firstName" type="text" name="firstName" required
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- Last Name -->
    <div>
      <label for="lastName" class="block text-l font-medium text-gray-100">Last Name</label>
      <div class="mt-2">
        <input id="lastName" type="text" name="lastName" required
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- Gender -->
    <div>
      <label for="gender" class="block text-l font-medium text-gray-100">Gender</label>
      <div class="mt-2">
        <input id="gender" type="text" name="gender" required
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- Date of Birth -->
    <div>
      <label for="dob" class="block text-l font-medium text-gray-100">Date of Birth</label>
      <div class="mt-2">
        <input id="dob" type="date" name="dob" required
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- Course -->
    <div>
      <label for="course" class="block text-l font-medium text-gray-100">Course</label>
      <div class="mt-2">
        <input id="course" type="text" name="course" required
          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white 
          outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 
          focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-l" />
      </div>
    </div>

    <!-- Year Level -->
<div>
  <label for="yearLevel" class="block text-l font-medium text-gray-100">Year Level</label>
  <div class="mt-2">
    <select id="yearLevel" name="yearLevel" required 
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
        Sign in
      </button>
    </div>

  </form>
</div>
