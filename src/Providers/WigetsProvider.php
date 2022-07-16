<?php

namespace Rochi88\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Rochi88\Admin\Http\Livewire\Bill;
use Rochi88\Admin\Http\Livewire\Invoice;
use Rochi88\Admin\View\Components\Activity;
use Rochi88\Admin\View\Components\Alert;
use Rochi88\Admin\View\Components\Analytics;
use Rochi88\Admin\View\Components\ApexChart;
use Rochi88\Admin\View\Components\Base;
use Rochi88\Admin\View\Components\Breadcrumb;
use Rochi88\Admin\View\Components\CompanySelector;
use Rochi88\Admin\View\Components\ContactList;
use Rochi88\Admin\View\Components\ContactSection;
use Rochi88\Admin\View\Components\Crm;
use Rochi88\Admin\View\Components\Datatable;
use Rochi88\Admin\View\Components\Devider;
use Rochi88\Admin\View\Components\Ecommerce;
use Rochi88\Admin\View\Components\Editor;
use Rochi88\Admin\View\Components\FileUploader;
use Rochi88\Admin\View\Components\Helpdesk;
use Rochi88\Admin\View\Components\Hospital;
use Rochi88\Admin\View\Components\IconPricing;
use Rochi88\Admin\View\Components\Input;
use Rochi88\Admin\View\Components\Modal;
use Rochi88\Admin\View\Components\MvAnalytics;
use Rochi88\Admin\View\Components\Notification;
use Rochi88\Admin\View\Components\Pricing;
use Rochi88\Admin\View\Components\Profile;
use Rochi88\Admin\View\Components\Project;
use Rochi88\Admin\View\Components\Search;
use Rochi88\Admin\View\Components\Select;
use Rochi88\Admin\View\Components\Select2;
use Rochi88\Admin\View\Components\Seo;
use Rochi88\Admin\View\Components\SettingButton;
use Rochi88\Admin\View\Components\Shortcuts;
use Rochi88\Admin\View\Components\SwitchBtn;
use Rochi88\Admin\View\Components\Textarea;
use Rochi88\Admin\View\Components\Translate;

class WigetsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bindComponents();
    }

    private function bindComponents(){
        Livewire::component('admin-invoice', Invoice::class);
        Livewire::component('admin-bill', Bill::class);

        $this->loadViewComponentsAs('admin', [
            Alert::class,
            Modal::class,
            Search::class,
            Shortcuts::class,
            Translate::class,
            Notification::class,
            Seo::class,
            Datatable::class,
            Breadcrumb::class,
            Input::class,
            Select2::class,
            Analytics::class,
            ContactList::class,
            ContactSection::class,
            Crm::class,
            Ecommerce::class,
            Helpdesk::class,
            Hospital::class,
            IconPricing::class,
            MvAnalytics::class,
            Pricing::class,
            Profile::class,
            Project::class,
            ApexChart::class,
            SettingButton::class,
            Devider::class,
            CompanySelector::class,
            Editor::class,
            Select::class,
            Textarea::class,
            SwitchBtn::class,
            FileUploader::class,
            Base::class,
            Activity::class,
        ]);
    }
}
