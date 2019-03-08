<header class="bg-black p-4 w-full mb-8">
	<div class="container mx-auto flex flex-row items-center justify-between">
		<a class="text-white text-xl no-underline" href="{{ route('index') }}">
			Directory Manager
		</a>
		<nav class="flex flex-row items-center">
			@guest
			<a class="text-white no-underline m-2" href="{{ route('login') }}">
				Login
			</a>
			@else
			<a class="text-white no-underline m-2" href="{{ route('computers.index') }}">
				Computers
			</a>
			<a class="text-white no-underline m-2" href="{{ route('groups.index') }}">
				Groups
			</a>
			<a class="text-white no-underline m-2" href="{{ route('users.index') }}">
				Users
			</a>
			<a class="text-white no-underline m-2" href="{{ route('units.index') }}">
				Units
			</a>
			<a class="text-white no-underline m-2" href="#" @click="submitLogoutForm()">
				Logoff
			</a>
			@endguest
		</nav>
	</div>
</header>