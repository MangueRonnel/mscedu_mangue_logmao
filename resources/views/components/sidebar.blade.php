<nav id="sidebar" class="hidden lg:flex lg:flex-col z-[100] bg-gradient-to-t from-blue-700 to-blue-100 shadow-lg w-1/5 h-screen top-0 left-0 min-w-[250px] py-6 px-4 font-[sans-serif] overflow-auto">
    <a href="/">
        <img src="{{ asset('/images/logo.png') }}" alt="logo" class='w-[160px]'/>
    </a>

    <ul class="mt-6">
      <li>
        <a href="/"
            class="text-gray-700 hover:text-blue-600 text-sm flex items-center hover:bg-blue-50 rounded px-4 py-3 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"  class="mr-4 h-6 w-6 fill-grey-500 stroke-none">
                <path d="M530.81-598.38v-214.35h281.92v214.35H530.81ZM147.27-463.23v-349.5h281.92v349.5H147.27Zm383.54 315.96v-349.5h281.92v349.5H530.81Zm-383.54 0v-214.35h281.92v214.35H147.27Zm55.96-371.92h170v-237.58h-170v237.58Zm383.54 315.96h170v-237.58h-170v237.58Zm0-451.11h170v-102.43h-170v102.43ZM203.23-203.23h170v-102.43h-170v102.43Zm170-315.96Zm213.54-135.15Zm0 213.53ZM373.23-305.66Z"/>
            </svg>
            <span>Dashboard</span>
        </a>
      </li>
    </ul>

    <div class="mt-6">
      <h6 class="text-blue-600 text-sm font-bold px-4">Manage</h6>
      <ul class="mt-3">
        <li>
            <a href="/classrooms"
                class="text-gray-800 hover:text-blue-600 text-sm flex items-center hover:bg-blue-50 rounded px-4 py-3 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"  class="mr-4 h-6 w-6 fill-grey-500 stroke-none">
                    <path d="M343.08-470.38ZM107.27-147.27v-439.77L400-807.69l179.73 135.07q-16.15 4.2-30.15 11.02-13.99 6.82-26.96 16.45L400-737.54 163.23-559.26v356.03h165.23v55.96H107.27Zm304.85 0v-62.77q0-17.26 9.07-32.17 9.08-14.9 24.12-24.21 44.38-26.12 93.4-39.54 49.02-13.42 101.14-13.42 52.11 0 101.3 13.26 49.2 13.27 93.73 39.7 14.85 9.31 24.02 24.22 9.18 14.91 9.18 32.16v62.77H412.12Zm60.76-55.96h334.24l1.3-14q-38.88-21.92-81.19-34.06-42.31-12.13-87.22-12.13t-87.23 12.13q-42.32 12.14-81.01 34.06l1.11 14Zm167.17-182.12q-45.01 0-76.47-31.44-31.46-31.45-31.46-76.52 0-45.07 31.46-76.54 31.47-31.46 76.43-31.46 44.95 0 76.51 31.46 31.56 31.47 31.56 76.41 0 45.17-31.51 76.63-31.51 31.46-76.52 31.46Zm-.06-55.96q21.66 0 36.9-15.09 15.23-15.09 15.23-36.88 0-21.8-15.17-36.93-15.17-15.14-36.89-15.14-21.71 0-36.85 15.12-15.13 15.12-15.13 36.76 0 21.89 15.12 37.03 15.13 15.13 36.79 15.13Zm.01 238.08Z"/>
                </svg>
                <span>Classrooms</span>
            </a>
        </li>
        <li>
            <a href="/account"
                class="text-gray-800 hover:text-blue-600 text-sm flex items-center hover:bg-blue-50 rounded px-4 py-3 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"  class="mr-4 h-6 w-6 fill-grey-500 stroke-none">
                    <path d="M480-492.31q-57.75 0-98.87-41.12Q340-574.56 340-632.31q0-57.75 41.13-98.87 41.12-41.13 98.87-41.13 57.75 0 98.87 41.13Q620-690.06 620-632.31q0 57.75-41.13 98.88-41.12 41.12-98.87 41.12ZM180-187.69v-88.93q0-29.38 15.96-54.42 15.96-25.04 42.66-38.5 59.3-29.07 119.65-43.61 60.35-14.54 121.73-14.54t121.73 14.54q60.35 14.54 119.65 43.61 26.7 13.46 42.66 38.5Q780-306 780-276.62v88.93H180Zm60-60h480v-28.93q0-12.15-7.04-22.5-7.04-10.34-19.11-16.88-51.7-25.46-105.42-38.58Q534.7-367.69 480-367.69q-54.7 0-108.43 13.11-53.72 13.12-105.42 38.58-12.07 6.54-19.11 16.88-7.04 10.35-7.04 22.5v28.93Zm240-304.62q33 0 56.5-23.5t23.5-56.5q0-33-23.5-56.5t-56.5-23.5q-33 0-56.5 23.5t-23.5 56.5q0 33 23.5 56.5t56.5 23.5Zm0-80Zm0 384.62Z"/>
                </svg>
                <span>Account</span>
            </a>
        </li>
      </ul>
    </div>
</nav>

