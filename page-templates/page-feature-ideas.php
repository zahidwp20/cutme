<?php
/**
 * Template Name: Feature Ideas
 *
 * @package cutme
 */

get_header();

get_template_part('templates-parts/part', 'banner');

?>
<!-- feature-ideas-start -->
<section class="relative py-24">
	<div class="mx-auto max-w-3xl px-6 md:px-12 lg:px-6 xl:px-0">
		<div class="flex justify-between sm:items-center lg:items-end flex-col md:flex-row lg:flex-row">
			<div>
				<h2 class="text-4xl font-semibold text-primary-950">Feature Ideas</h2>
				<p class="text-lg text-primary-950 mt-3">Ideas, bugs, comments to improve cutme!</p>
				<p class="text-base text-gray-600 mt-3">Showing 10 Ideas</p>
			</div>
			<div>
				<button id="modal-open"
					class="bg-primary-500 bg-opacity-90 hover:bg-opacity-100 text-white font-bold py-4 px-4 rounded flex items-center justify-between mt-8 lg:mt-0">
					<span class="inline-block">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
							stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
						</svg>
					</span>
					Add Ideas
				</button>
			</div>
		</div>
		<div class="flex mt-10">
			<ol class="">
				<li class="relative flex flex-col lg:flex-row  border-y border-gray-400 py-8">
					<div>
						<div class="flex flex-col items-center justify-center w-14 h-16 lg:mr-8 mb-8 lg:mb-0 border rounded-md border-gray-400 text-center font-bold text-primary-950 relative z-10">
							<button
								class="flex items-center justify-center cursor-pointer w-4 h-4 ">
								<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
									class="">
									<path
										d="m4.06422 10.6606 3.60481-6.40855c.18904-.33607.6729-.33607.86194 0l3.60483 6.40855c.1854.3296-.0528.7369-.431.7369h-7.2096c-.37819 0-.61639-.4073-.43098-.7369z"
										fill="currentColor"></path>
								</svg>
							</button>
							<span>2</span>
							<button
								class="flex items-center justify-center cursor-pointer w-4 h-4"><svg
									viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
									class="-rotate-180">
									<path
										d="m4.06422 10.6606 3.60481-6.40855c.18904-.33607.6729-.33607.86194 0l3.60483 6.40855c.1854.3296-.0528.7369-.431.7369h-7.2096c-.37819 0-.61639-.4073-.43098-.7369z"
										fill="currentColor"></path>
								</svg>
							</button>
						</div>
					</div>
					<div>
						<h5 class="text-2xl font-semibold text-primary-950">Support for PHP 8.3 on sites generated via
							(old)
							templates</h5>
						<p class="text-lg text-gray-600 mt-3">I noticed that when creating sites out of templates (which
							were created back when PHP 8.2 was the
							latest), cannot be upgraded to PHP 8.3 via cutme pannel.
							This works fine when new websites are created, but not for sites from templates.
							This would be an amazing enhancement/improvement that can save users a lot of work to
							recreate
							those old templates, and I really hope it's doable!
							Thankyou!
						</p>
						<div class="">
							<div class="flex items-center justify-between flex-row mt-4">
								<div class="flex items-center">
									<strong class="text-sm ">Anonymous Leopard</strong>
									<span
										class="bg-text-medium inline-block rounded-full w-1 h-1 bg-gray-400 mx-2"></span>
									<time class="text-0.6875 text-text-medium" datetime="2023-12-14 09:42"
										title="14 Dec, 2023 at 9:42 AM">14 Dec</time>
								</div>
								<div class="flex items-center">
									<div class="w-4 h-4 mr-2">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
											stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round"
												d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
										</svg>
									</div>
									<p class="text-base text-medium">0</p>
								</div>
							</div>
						</div>
					</div>
					<a class="absolute inset-0" title="Support for PHP 8.3 on sites generated via (old) templates"
						href="/feature-ideas/"></a>
				</li>
				<li class="relative flex flex-col lg:flex-row  border-y border-gray-400 py-8">
					<div>
						<div class="flex flex-col items-center justify-center w-14 h-16 lg:mr-8 mb-8 lg:mb-0 border rounded-md border-gray-400 text-center font-bold text-primary-950 relative z-10">
							<button
								class="flex items-center justify-center cursor-pointer w-4 h-4 ">
								<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
									class="">
									<path
										d="m4.06422 10.6606 3.60481-6.40855c.18904-.33607.6729-.33607.86194 0l3.60483 6.40855c.1854.3296-.0528.7369-.431.7369h-7.2096c-.37819 0-.61639-.4073-.43098-.7369z"
										fill="currentColor"></path>
								</svg>
							</button>
							<span>2</span>
							<button
								class="flex items-center justify-center cursor-pointer w-4 h-4"><svg
									viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
									class="-rotate-180">
									<path
										d="m4.06422 10.6606 3.60481-6.40855c.18904-.33607.6729-.33607.86194 0l3.60483 6.40855c.1854.3296-.0528.7369-.431.7369h-7.2096c-.37819 0-.61639-.4073-.43098-.7369z"
										fill="currentColor"></path>
								</svg>
							</button>
						</div>
					</div>
					<div>
						<h5 class="text-2xl font-semibold text-primary-950">Support for PHP 8.3 on sites generated via
							(old)
							templates</h5>
						<p class="text-lg text-gray-600 mt-3">I noticed that when creating sites out of templates (which
							were created back when PHP 8.2 was the
							latest), cannot be upgraded to PHP 8.3 via cutme pannel.
							This works fine when new websites are created, but not for sites from templates.
							This would be an amazing enhancement/improvement that can save users a lot of work to
							recreate
							those old templates, and I really hope it's doable!
							Thankyou!
						</p>
						<div class="">
							<div class="flex items-center justify-between flex-row mt-4">
								<div class="flex items-center">
									<strong class="text-sm ">Anonymous Leopard</strong>
									<span
										class="bg-text-medium inline-block rounded-full w-1 h-1 bg-gray-400 mx-2"></span>
									<time class="text-0.6875 text-text-medium" datetime="2023-12-14 09:42"
										title="14 Dec, 2023 at 9:42 AM">14 Dec</time>
								</div>
								<div class="flex items-center">
									<div class="w-4 h-4 mr-2">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
											stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round"
												d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
										</svg>
									</div>
									<p class="text-base text-medium">0</p>
								</div>
							</div>
						</div>
					</div>
					<a class="absolute inset-0" title="Support for PHP 8.3 on sites generated via (old) templates"
						href="/feature-ideas/"></a>
				</li>
				<li class="relative flex flex-col lg:flex-row  border-y border-gray-400 py-8">
					<div>
						<div class="flex flex-col items-center justify-center w-14 h-16 lg:mr-8 mb-8 lg:mb-0 border rounded-md border-gray-400 text-center font-bold text-primary-950 relative z-10">
							<button
								class="flex items-center justify-center cursor-pointer w-4 h-4 ">
								<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
									class="">
									<path
										d="m4.06422 10.6606 3.60481-6.40855c.18904-.33607.6729-.33607.86194 0l3.60483 6.40855c.1854.3296-.0528.7369-.431.7369h-7.2096c-.37819 0-.61639-.4073-.43098-.7369z"
										fill="currentColor"></path>
								</svg>
							</button>
							<span>2</span>
							<button
								class="flex items-center justify-center cursor-pointer w-4 h-4"><svg
									viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
									class="-rotate-180">
									<path
										d="m4.06422 10.6606 3.60481-6.40855c.18904-.33607.6729-.33607.86194 0l3.60483 6.40855c.1854.3296-.0528.7369-.431.7369h-7.2096c-.37819 0-.61639-.4073-.43098-.7369z"
										fill="currentColor"></path>
								</svg>
							</button>
						</div>
					</div>
					<div>
						<h5 class="text-2xl font-semibold text-primary-950">Support for PHP 8.3 on sites generated via
							(old)
							templates</h5>
						<p class="text-lg text-gray-600 mt-3">I noticed that when creating sites out of templates (which
							were created back when PHP 8.2 was the
							latest), cannot be upgraded to PHP 8.3 via cutme pannel.
							This works fine when new websites are created, but not for sites from templates.
							This would be an amazing enhancement/improvement that can save users a lot of work to
							recreate
							those old templates, and I really hope it's doable!
							Thankyou!
						</p>
						<div class="">
							<div class="flex items-center justify-between flex-row mt-4">
								<div class="flex items-center">
									<strong class="text-sm ">Anonymous Leopard</strong>
									<span
										class="bg-text-medium inline-block rounded-full w-1 h-1 bg-gray-400 mx-2"></span>
									<time class="text-0.6875 text-text-medium" datetime="2023-12-14 09:42"
										title="14 Dec, 2023 at 9:42 AM">14 Dec</time>
								</div>
								<div class="flex items-center">
									<div class="w-4 h-4 mr-2">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
											stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round"
												d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
										</svg>
									</div>
									<p class="text-base text-medium">0</p>
								</div>
							</div>
						</div>
					</div>
					<a class="absolute inset-0" title="Support for PHP 8.3 on sites generated via (old) templates"
						href="/feature-ideas/"></a>
				</li>
			</ol>
		</div>
	</div>
</section>

<!-- Modal -->
<div id="modal" class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center">
	<div class="modal-content bg-white w-full lg:w-1/3 p-6 rounded-lg overflow-y-auto h-2/3">
		<div class="modal-header pb-6">
			<div class="flex justify-between items-center">
				<h2 class="text-2xl font-semibold text-primary-950">আপনার ধারণা সম্পর্কে আমাদের বলুন!</h2>
				<button id="modal-close" class="text-gray-500 hover:text-gray-700">
					<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
						</path>
					</svg>
				</button>
			</div>
		</div>
		<div class="modal-body">
			<form action="">
				<div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mb-8">
					<div class="sm:col-span-3">
						<label class="block text-xl font-ekushey-lalsalubold text-primary-950 cursor-pointer mb-4"
							for="name">আপনার নাম :</label>
						<input class="block border rounded-md w-full border-[#9A9FA9] p-5 outline-none text-lg"
							id="name" type="text" placeholder="আপনার নাম লিখুন">
					</div>

					<div class="sm:col-span-3">
						<label class="block text-xl font-ekushey-lalsalubold text-primary-950 cursor-pointer mb-4"
							for="text">আপনার মোবাইল :</label>
						<input class="block border rounded-md w-full border-[#9A9FA9] p-5 outline-none text-lg"
							id="text" type="text" placeholder="আপনার মোবাইল লিখুন">
					</div>
				</div>
				<div class="mb-8">
					<label class="block text-xl font-ekushey-lalsalubold text-primary-950 cursor-pointer mb-4"
						for="idea">আইডিয়া টাইটেল :</label>
					<input class="block border rounded-md w-full border-[#9A9FA9] p-5 outline-none text-lg" id="idea"
						type="text" placeholder="আইডিয়া টাইটেল লিখুন">
				</div>
				<div class="mb-8">
					<label class="block text-xl font-ekushey-lalsalubold text-primary-950 cursor-pointer mb-4"
						for="message">আপনার বিবরণ :</label>
					<textarea id="message" name="message" rows="3"
						class="block border rounded-md w-full border-[#9A9FA9] p-5 outline-none text-lg"
						placeholder="আপনার বিবরণ লিখুন"></textarea>
				</div>
				<div class="flex flex-col mb-8">
					<div class="flex flex-wrap -mb-2">
						<div class="flex mr-2 mb-2"><input type="checkbox" name="topics" id="topics.topic_styling"
								class="styles_input_checked input-reset opacity-0 w-0 h-0" value="topic_styling"><label
								class="flex px-2 py-1 items-center relative border rounded-md cursor-pointer text-0.75 leading-normal text-text-medium border-element-10"
								for="topics.topic_styling">Styling 🎨</label></div>
						<div class="flex mr-2 mb-2"><input type="checkbox" name="topics" id="topics.topic_mice"
								class="styles_input_checked input-reset opacity-0 w-0 h-0" value="topic_mice"><label
								class="flex px-2 py-1 items-center relative border rounded-md cursor-pointer text-0.75 leading-normal text-text-medium border-element-10"
								for="topics.topic_mice">Misc 🤷</label></div>
						<div class="flex mr-2 mb-2"><input type="checkbox" name="topics" id="topics.topic_bug"
								class="styles_input_checked input-reset opacity-0 w-0 h-0" value="topic_bug"><label
								class="flex px-2 py-1 items-center relative border rounded-md cursor-pointer text-0.75 leading-normal text-text-medium border-element-10"
								for="topics.topic_bug">Bug 🐛</label></div>
						<div class="flex mr-2 mb-2"><input type="checkbox" name="topics" id="topics.topic_deal_breaker"
								class="styles_input_checked input-reset opacity-0 w-0 h-0"
								value="topic_deal_breaker"><label
								class="flex px-2 py-1 items-center relative border rounded-md cursor-pointer text-0.75 leading-normal text-text-medium border-element-10"
								for="topics.topic_deal_breaker">Deal Breaker 💔</label></div>
						<div class="flex mr-2 mb-2"><input type="checkbox" name="topics" id="topics.topic_new"
								class="styles_input_checked input-reset opacity-0 w-0 h-0" value="topic_new"><label
								class="flex px-2 py-1 items-center relative border rounded-md cursor-pointer text-0.75 leading-normal text-text-medium border-element-10"
								for="topics.topic_new">New 👋</label></div>
						<div class="flex mr-2 mb-2"><input type="checkbox" name="topics" id="topics.topic_improvement"
								class="styles_input_checked input-reset opacity-0 w-0 h-0"
								value="topic_improvement"><label
								class="flex px-2 py-1 items-center relative border rounded-md cursor-pointer text-0.75 leading-normal text-text-medium border-element-10"
								for="topics.topic_improvement">Improvement 👍</label></div>
						<div class="flex mr-2 mb-2"><input type="checkbox" name="topics" id="topics.topic_integration"
								class="styles_input_checked input-reset opacity-0 w-0 h-0"
								value="topic_integration"><label
								class="flex px-2 py-1 items-center relative border rounded-md cursor-pointer text-0.75 leading-normal text-text-medium border-element-10"
								for="topics.topic_integration">Integrations 🔗</label></div>
					</div>
				</div>
				<button type="submit"
					class="bg-primary-500 text-lg text-white py-4 px-8 rounded-full font-ekushey-lalsalubold hover:bg-opacity-75">জমা
					দিন</button>
			</form>
		</div>
	</div>
</div>

<!-- features-ideas-end -->

<?php
get_template_part('templates-parts/part', 'cta');

get_footer();
