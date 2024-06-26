@extends('front.master.landing_master')

@section('content')
<div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
	<div class="absolute inset-0 -z-10 overflow-hidden">
		<svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
			<defs>
				<pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
					<path d="M100 200V.5M.5 .5H200" fill="none" />
				</pattern>
			</defs>
			<svg x="50%" y="-1" class="overflow-visible fill-gray-50">
				<path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
			</svg>
			<rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
		</svg>
	</div>
	<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
		<div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
			<div class="lg:pr-4">
				<div class="lg:max-w-lg">
					<p class="text-base font-semibold leading-7 text-indigo-600">About us</p>
					<h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Labcub Team</h1>
				</div>
			</div>
		</div>

		<div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
			<div class="lg:pr-4">
				<div class="">
					<p>Welcome to <a href="{{ url('') }}"><b>Labcub</b></a>, your ultimate destination for all things programming and technical knowledge. We are dedicated to empowering developers and aspiring tech enthusiasts with a treasure trove of services, products, blogs, and documents that make the world of programming and technology more accessible than ever before.</p>
					<!-- <ul role="list" class="mt-8 space-y-8 text-gray-600">
						<li class="flex gap-x-3">
							<svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
							</svg>
							<span><strong class="font-semibold text-gray-900">Push to deploy.</strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</span>
						</li>
						<li class="flex gap-x-3">
							<svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
							</svg>
							<span><strong class="font-semibold text-gray-900">SSL certificates.</strong> Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</span>
						</li>
						<li class="flex gap-x-3">
							<svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
								<path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
							</svg>
							<span><strong class="font-semibold text-gray-900">Database backups.</strong> Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</span>
						</li>
					</ul> -->
					<h2 class="mt-8 text-2xl font-bold tracking-tight text-gray-900">Who We Are:</h2>

					<p class="mt-4">At <a href="{{ url('') }}"><b>Labcub</b></a>, we are a team of passionate developers, tech enthusiasts, and educators who share a common mission: to demystify the complexities of programming and technical concepts. We believe that everyone should have the opportunity to learn and excel in the world of technology, regardless of their background or experience level.</p>

					<h2 class="mt-8 text-2xl font-bold tracking-tight text-gray-900">What We Offer:</h2>

					<ol class="mt-4">
						<li class="mt-4"><b>Comprehensive Learning Resources: </b>Our platform offers a vast array of tutorials, guides, and documentation that cover a wide range of programming languages, frameworks, and technologies. Whether you're a beginner looking to get started or an experienced developer seeking to deepen your skills, we have something for everyone.</li>

						<li class="mt-4"><b>Cutting-Edge Products: </b>We provide a curated selection of tools, software, and applications designed to streamline your development process. From code editors and version control systems to productivity-enhancing apps, we've got you covered.</li>

						<li class="mt-4"><b>Insightful Blogs and Articles: </b>Our team of experts and guest contributors regularly publish informative and engaging blogs and articles. Explore the latest trends, best practices, and real-world insights to stay ahead in the rapidly evolving tech landscape.</li>

						<li class="mt-4"><b>Developer Community: </b>Join our vibrant community of like-minded individuals who are passionate about programming and technology. Connect with fellow developers, ask questions, share your knowledge, and collaborate on exciting projects.</li>
					</ol>

					<h2 class="mt-8 text-2xl font-bold tracking-tight text-gray-900">Our Commitment:</h2>

					<ul class="mt-4">
						<li class="mt-4"><b>Accessibility: </b>We are committed to breaking down barriers and making technical knowledge accessible to everyone. Our content is designed to cater to diverse learning styles and levels of expertise.</li>

						<li class="mt-4"><b>Quality: </b>We pride ourselves on providing high-quality, accurate, and up-to-date content. Our team of experts ensures that you receive the most reliable information and guidance.</li>

						<li class="mt-4"><b>Innovation: </b>Technology is constantly evolving, and so are we. We stay at the forefront of industry advancements, continuously updating our resources and offerings to keep you ahead of the curve.</li>

						<li class="mt-4"><b>Community-Centric: </b>We value the contributions of our community members and actively encourage collaboration and knowledge sharing. Together, we can achieve more.</li>
					</ul>

					<h2 class="mt-8 text-2xl font-bold tracking-tight text-gray-900">Join Us in Your Tech Journey:</h2>

					<p class="mt-4">Whether you're an aspiring developer, a seasoned pro, or simply curious about the world of programming and technology, <a href="{{ url('') }}"><b>Labcub</b></a> is your trusted companion on your journey to technical mastery. Together, we will simplify the complex, unravel the mysteries of code, and empower you to create, innovate, and excel in the digital age.</p>

					<p>Thank you for choosing <a href="{{ url('') }}"><b>Labcub</b></a> as your trusted source for all your programming and technical needs. Let's embark on this exciting journey together and turn your programming dreams into reality!</p>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection