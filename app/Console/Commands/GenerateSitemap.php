<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Escort;
use App\Models\Beach;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate dynamic sitemap for Escorts and Beaches';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // 🔹 Homepage
        $sitemap->add(Url::create(url('/'))
            ->setPriority(1.0)
            ->setChangeFrequency('daily'));

        // 🔹 Beach Pages
        $beaches = Beach::all();
        foreach ($beaches as $beach) {
            $sitemap->add(
                Url::create(url('/dubai/' . $beach->slug))
                    ->setPriority(0.9)
                    ->setChangeFrequency('weekly')
            );
        }

        // 🔹 Escort Detail Pages
        $escorts = Escort::where('status', 'active')->get();
        foreach ($escorts as $escort) {
            $sitemap->add(
                Url::create(url('dubai/' . $escort->location . '/' . $escort->slug))
                    ->setPriority(0.9)
                    ->setChangeFrequency('weekly')
            );
        }

        // 🔹 Optional Static Pages
        $pages = ['/about', '/contact', '/privacy', '/terms'];
        foreach ($pages as $page) {
            $sitemap->add(
                Url::create(url($page))
                    ->setPriority(0.5)
                    ->setChangeFrequency('monthly')
            );
        }

        // Save to public/sitemap.xml
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated with Beaches & Escort detail URLs!');
    }
}
