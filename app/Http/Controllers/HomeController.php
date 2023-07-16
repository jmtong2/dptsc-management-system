<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routs
     */
    public function index(Request $request)
    {
        return view('dashboards.dashboard1');
    }

    /*
     * Auth pages Routs
     */

     function authLogin()
    {
    return view('auth.login');
    }

    function authRegister()
    {
        return view('auth.register');
    }

    function authRecoverPassword()
    {
        return view('auth.forgot-password');
    }

    function authConfirmEmail()
    {
        return view('auth.verify-email');
    }


    /*
     * Form Page Routs
     */

    public function FormsQuill()
    {
        return view('forms.quill');
    }

    public function FormsRadio()
    {
        return view('forms.radio');
    }

    public function FormsLayout()
    {
        return view('forms.layout');
    }

    public function FormsSelect()
    {
        return view('forms.select');
    }

    public function FormsSwitch()
    {
        return view('forms.switch');
    }

    public function FormsCheckbox()
    {
        return view('forms.checkbox');
    }

    public function FormsTextarea()
    {
        return view('forms.textarea');
    }

    public function FormsDatepicker()
    {
        return view('forms.datepicker');
    }

    public function FormsValidation()
    {
        return view('forms.validation');
    }

    public function FormsInputgroup()
    {
        return view('forms.inputgroup');
    }

    public function FormsFileuploader()
    {
        return view('forms.fileuploader');
    }


    /*
     * UI Page Routs
     */

    public function UiGrid()
    {
        return view('ui.grid');
    }

    public function UiTabs()
    {
        return view('ui.tabs');
    }

    public function UiCards()
    {
        return view('ui.cards');
    }

    public function UiModal()
    {
        return view('ui.modal');
    }

    public function UiAlerts()
    {
        return view('ui.alerts');
    }

    public function UiBadges()
    {
        return view('ui.badges');
    }

    public function UiColors()
    {
        return view('ui.colors');
    }

    public function UiImages()
    {
        return view('ui.images');
    }

    public function UiAvatars()
    {
        return view('ui.avatars');
    }

    public function UiButtons()
    {
        return view('ui.buttons');
    }

    public function UiCarousel()
    {
        return view('ui.carousel');
    }

    public function UiPopovers()
    {
        return view('ui.popovers');
    }

    public function UiTooltips()
    {
        return view('ui.tooltips');
    }

    public function UiBoxshadows()
    {
        return view('ui.boxshadows');
    }

    public function UiBreadcrumb()
    {
        return view('ui.breadcrumb');
    }

    public function UiListgroup()
    {
        return view('ui.listgroup');
    }

    public function UiPagination()
    {
        return view('ui.pagination');
    }

    public function UiTypography()
    {
        return view('ui.typography');
    }

    public function UiMedia()
    {
        return view('ui.media');
    }

    public function UiProgressbars()
    {
        return view('ui.progressbars');
    }

    public function UiButtongroup()
    {
        return view('ui.buttongroup');
    }
    public function UiNotification()
    {
        return view('ui.notification');
    }

    public function UiVideo()
    {
        return view('ui.video');
    }

     /*
     * App Page Routs
     */

       /*
       * App UserPage Routs
       */

    public function Userprofile()
    {
        return view('app.userdetail.userprofile');
    }

    public function Useradd()
    {
        return view('app.userdetail.useradd');
    }

    public function Userlist()
    {
        return view('app.userdetail.userlist');
    }


    /*
     * Error Page Routs
     */

    public function Error404()
    {
        return view('pageError.error404');
    }

    public function Error500()
    {
        return view('pageError.error500');
    }

    /*
     * Extra Pages Routs
     */


    public function ExtrapagesInvoice()
    {
        return view('extrapages.invoice');
    }

    public function ExtrapagesBlankpage()
    {
        return view('extrapages.blankpage');
    }

    public function ExtrapagesMaintenance()
    {
        return view('extrapages.maintenance');
    }

    public function ExtrapagesComingsoon()
    {
        return view('extrapages.comingsoon');
    }

    public function ExtrapagesPricing()
    {
        return view('extrapages.pricing');
    }

    public function ExtrapagesPricing2()
    {
        return view('extrapages.pricing2');
    }

    public function privacy()
    {
        return view('extrapages.privacy');
    }

    public function termService()
    {
        return view('extrapages.term-service');
    }

    /*
     * Table Page Routs
     */

    public function tableBasics()
    {
        return view('table.tablebasics');
    }

    public function tableData()
    {
        return view('table.tabledata');
    }

    public function tableTree()
    {
        return view('table.tabletree');
    }

    public function tableEditable()
    {
        return view('table.tableeditable');
    }

    /*
    * Pages Routs
    */

    public function listCategory()
    {
        return view('pages.list-category');
    }

    public function addCategory()
    {
        return view('pages.add-category');
    }

    public function listProduct()
    {
        return view('pages.list-product');
    }

    public function addProduct()
    {
        return view('pages.add-product');
    }

    public function listPurchase()
    {
        return view('pages.list-purchase');
    }

    public function addPurchase()
    {
        return view('pages.add-purchase');
    }

    public function listSale()
    {
        return view('pages.list-sale');
    }

    public function addSale()
    {
        return view('pages.add-sale');
    }

    public function listReturn()
    {
        return view('pages.list-return');
    }

    public function addReturn()
    {
        return view('pages.add-return');
    }

    public function report()
    {
        return view('pages.report');
    }


    /*
    * people Pages Routs
    */
    public function supplier()
    {
        return view('people.supplier');
    }

    public function addSupplier()
    {
        return view('people.add-supplier');
    }

    public function customer()
    {
        return view('people.customers');
    }

    public function addCustomer()
    {
        return view('people.add-customer');
    }

    public function user()
    {
        return view('people.user');
    }

    public function addUser()
    {
        return view('people.add-user');
    }
}
