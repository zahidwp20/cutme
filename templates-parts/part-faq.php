<?php

$faq_items = array(
    array(
        'question' => 'What is a URL Shortener?',
        'answer' => 'A URL shortener, also referred to as a link shortener, may appear straightforward, but its use can significantly boost your marketing strategy.Link shorteners function by converting lengthy URLs into more compact, comprehensible versions.Many desktop publishing packages and web page editors now use Lorem Ipsum as their Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
    ),
    array(
        'question' => 'What is a URL Shortener?',
        'answer' => 'A URL shortener, also referred to as a link shortener, may appear straightforward, but its use can significantly boost your marketing strategy.Link shorteners function by converting lengthy URLs into more compact, comprehensible versions.Many desktop publishing packages and web page editors now use Lorem Ipsum as their Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
    ),
    array(
        'question' => 'What is a URL Shortener?',
        'answer' => 'A URL shortener, also referred to as a link shortener, may appear straightforward, but its use can significantly boost your marketing strategy.Link shorteners function by converting lengthy URLs into more compact, comprehensible versions.Many desktop publishing packages and web page editors now use Lorem Ipsum as their Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',

    ),
    array(
        'question' => 'What is a URL Shortener?',
        'answer' => 'A URL shortener, also referred to as a link shortener, may appear straightforward, but its use can significantly boost your marketing strategy.Link shorteners function by converting lengthy URLs into more compact, comprehensible versions.Many desktop publishing packages and web page editors now use Lorem Ipsum as their Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
    ),
    array(
        'question' => 'What is a URL Shortener?',
        'answer' => 'A URL shortener, also referred to as a link shortener, may appear straightforward, but its use can significantly boost your marketing strategy.Link shorteners function by converting lengthy URLs into more compact, comprehensible versions.Many desktop publishing packages and web page editors now use Lorem Ipsum as their Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
    ),

);

?>
<!-- faq-start -->
<section class="relative py-24 bg-[#D5EAF0] lg:mx-12 lg:rounded-xl">
    <div class="mx-auto max-w-7xl px-4 lg:px-0">
        <div class="mx-auto md:w-full lg:w-8/12">
            <h2
                class="font-bold font-literata text-center text-3xl lg:text-[55px] lg:leading-[70px] text-primary-950 mb-8">
                Frequently Asked Questions
            </h2>
            <p class="text-lg mb-6 text-primary-950 text-center px-0 lg:px-10">
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout.
            </p>
        </div>
        <div class="py-4 lg:py-20 flex flex-col gap-12 lg:flex-row">
            <div class="w-full lg:w-8/12 mx-auto">
                <div class="accordion">
                    <?php $firstItem = true; ?>
                    <?php foreach ($faq_items as $item): ?>
                        <div class="at-item mb-8 rounded-md overflow-hidden">
                            <div class="at-title <?= $firstItem ? 'active' : '' ?> cursor-pointer text-primary-950 bg-white relative transition-all p-5 flex justify-between items-center">
                                <h5 class="font-semibold font-inter">
                                    <?= $item['question'] ?>
                                </h5>
                                <span><i class="plus"></i></span>
                            </div>
                            <p class="at-tab bg-primary-500 text-white p-5 font-inter text-lg" style="<?= $firstItem ? 'display: block;' : '' ?>">
                                <?= $item['answer'] ?>
                            </p>
                        </div>
                        <?php $firstItem = false; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-end -->