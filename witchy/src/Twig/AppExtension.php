<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('getCategoryString', [$this, 'getCategoryString']),
            new TwigFunction('getCategoryVisual', [$this, 'getCategoryVisual']),
        ];
    }


    public function getFilters()
    {
        return [
            new TwigFilter('shuffleArray', [$this, 'shuffleArray']),
        ];
    }

    public function getCategoryString($slug)
    {
        // Tableau de clés/valeurs
        $color = [
            "dress" => "--clr:#f164de",
            "top" => "--clr:#35fff9",
            "bottom" => "--clr:#ffc535",
            "outwear" => "--clr:#ff3f70",
            "boots" => "--clr:#00dc82",
            "plateforms" => "--clr:#ff8526",
            "heels" => "--clr:#ff564b",
            "flat" => "--clr:#ba30ff",
            "jewellery" => "--clr:#57b8ff",
            "bags" => "--clr:#85ff57",
            "belts-and-harnesses" => "--clr:#ff9740",
            "socks" => "--clr:#3fffb6",
            "sunglasses" => "--clr:#ff5776",
            "hair-accessories" => "--clr:#963fff",
            "hat-and-headbands" => "--clr:#f1b764",
            "bedding-and-cushions" => "--clr:#46ff43",
            "rugs" => "--clr:#ff5d43",
            "candles-and-scent" => "--clr:#6543ff",
            "mirror" => "--clr:#ffff43",
            "baking" => "--clr:#64faf5",
            "Pets" => "--clr:#f443ff",
            "tableweare" => "--clr:#3fb6ff",
            "towel-and-mats" => "--clr:#ff8b17",
            "gift-cards" => "--clr:#17ffbc",
        ];

        $value = $color[$slug] ?? "--clr:#ffffff";

        return $value;
    }

    public function shuffleArray(array $array)
    {
        shuffle($array);
        return $array;
    }


    public function getCategoryVisual($slug)
    {
        // Tableau de clés/valeurs
        $visual = [
            "women" => '<div class="col-md-6 my-auto demoUnderCatImg">
                <div>
                    <img class="img-fluid" src="https://i.pinimg.com/564x/2d/13/e1/2d13e1c0976b4428cd90c2dff78f27fd.jpg" alt="Tag you\'re in">
                </div>
                <p class="px-app gitchyMenu px-glitch">
                    <span class="px-glitchtext px-glitchtext-anim">大きな悪いオオカミはどこですか</span>
                </p>
                <div>
                    <img class="img-fluid" src="https://i.pinimg.com/736x/df/a6/74/dfa67443b017ed999a78b156ed67140b.jpg" alt="where is the Big Bad Wolf ? ">
                </div>
            </div>',
            "men" => '<div class="col-md-6 my-auto demoUnderCatImg">
            <div>
                <img class="img-fluid" src="https://i.pinimg.com/564x/3b/93/65/3b936546dccf79beb2f10a45d5feb499.jpg" alt="Never Enough">
            </div>
            <p class="">
            <span class="DarkGlitch" data-text="nothing at all">Be the king or be
                <span class="font-serif">nothing at all</span>
            </span>
        </p>
        <div>
            <img class="img-fluid" src="https://i.pinimg.com/564x/dd/c9/c4/ddc9c477bb5254e62446ffcb1d438b50.jpg" alt="where is the Big Bad Wolf ? ">
        </div>
    </div>',
            "shoes" => '<div class="col-md-6 my-auto demoUnderCatImg">
            <div>
                <img class="img-fluid" src="https://i.pinimg.com/564x/b9/53/1e/b9531e762968aa24a6273b1698dc904b.jpg" alt="Tag you\'re in">
            </div>
            <p class="px-app gitchyMenu px-glitch">
                <span class="px-glitchtext px-glitchtext-anim">
                    I needed heels
                    <span class="font-serif">
                        to step on people</span>
                </span>
            </p>
            <div>
                <img class="img-fluid mt-5" src="https://i.pinimg.com/originals/69/a3/91/69a391f71208601d114231c01b5f2115.gif" alt="where is the Big Bad Wolf ? ">
            </div>
        </div>',
            "accessories" => '<div class="col-md-6 my-auto my-auto demoUnderCatImg">
            <div>
                <img class="img-fluid" src="https://i.pinimg.com/564x/eb/bf/ea/ebbfea61ab2f62359a278f9fa89b1e56.jpg" alt="Tag you\'re in">
            </div>
            <p class="px-app gitchyMenu px-glitch">
                <span class="px-glitchtext px-glitchtext-anim">
                    규칙 없음, 게임 없음</span></p>
					<div>
						<img class="img-fluid" src="https://i.pinimg.com/564x/59/92/96/599296ad5312c26176228b050cb2a0ed.jpg" alt="where is the Big Bad Wolf ? "></div>

				</div>',
                "home" => '<div class="col-md-6  my-auto demoUnderCatImg">
				<div>
					<img class="img-fluid" src="https://i.pinimg.com/564x/f6/1d/f5/f61df54386092478c6fb8b0419aede2f.jpg" alt="Tag you\'re in"></div>
				<p class="">
					<span class="DarkGlitch" data-text="homewear stuff">
						<span class="font-serif">No place\'s</span>
						like home</span>
				</p>
				<div>
					<img class="img-fluid" src="https://i.pinimg.com/564x/3a/50/06/3a5006c3f50c7ca95f2d0c6f68bcd097.jpg" alt="where is the Big Bad Wolf ? "></div>


			</div>'
        ];

        $value = $visual[$slug];

        return $value;
    }
}
