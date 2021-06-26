<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         3.3.4
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Event\Event;

/**
 * Error Handling Controller
 *
 * Controller used by ExceptionRenderer to render error responses.
 */
class ErrorController extends AppController
{
    /**
     * Initialization hook method.
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);

        //set SC logo path
        $this->loadModel('Organisations');

        $SC = $this->Organisations->get('1007');
        $SClogo = $SC->logopath;
        $this->set('logopath', $SClogo);


        $this->loadModel('Websitecontents');
        //set phone number
        $phonecontent = $this->Websitecontents->findByContentname('phone')->first();
        $phone = $phonecontent->contentvalue;
        $this->set('phone', $phone);

        //business days and hours
        $businesshourscontent = $this->Websitecontents->findByContentname('businessdayshours')->first();
        $operatingtime = $businesshourscontent->contentvalue;
        $this->set('operatingtime', $operatingtime);

        //email - footer
        $emailcontent = $this->Websitecontents->findByContentname('emailfull')->first();
        $emailfull = $emailcontent->contentvalue;
        $this->set('emailfull', $emailfull);

        //setting address - footer
        $addresscontent = $this->Websitecontents->findByContentname('address')->first();
        $address = $addresscontent->contentvalue;
        $this->set('address', $address);

        //setting facebook link - footer
        $facebookcontent = $this->Websitecontents->findByContentname('facebooklink')->first();
        $facebook = $facebookcontent->contentvalue;
        $this->set('facebook', $facebook);

        //setting linkedin link - footer
        $linkedincontent = $this->Websitecontents->findByContentname('linkedinlink')->first();
        $linkedin = $linkedincontent->contentvalue;
        $this->set('linkedin', $linkedin);

        //setting pinterest link - footer
        $pinterestcontent = $this->Websitecontents->findByContentname('pinterestlink')->first();
        $pinterest = $pinterestcontent->contentvalue;
        $this->set('pinterest', $pinterest);
        
        //Who we are page title
        $aboutustitle = $this->Websitecontents->findByContentname('aboutpagetitle')->first();
        $aboutpagetitle = $aboutustitle->contentvalue;
        $this->set('aboutpagetitle', $aboutpagetitle);

        //What we do page title
        $servicespagetitle = $this->Websitecontents->findByContentname('servicespagetitle')->first();
        $whatwedotitle = $servicespagetitle->contentvalue;
        $this->set('whatwedotitle', $whatwedotitle);

        //Get in touch page title
        $contacttitle = $this->Websitecontents->findByContentname('contactpagetitle')->first();
        $getintouch = $contacttitle->contentvalue;
        $this->set('getintouch', $getintouch);

    }

    /**
     * beforeFilter callback.
     *
     * @param \Cake\Event\Event $event Event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeFilter(Event $event)
    {
    }

    /**
     * beforeRender callback.
     *
     * @param \Cake\Event\Event $event Event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);

        $this->viewBuilder()->setTemplatePath('Error');
    }

    /**
     * afterFilter callback.
     *
     * @param \Cake\Event\Event $event Event.
     * @return \Cake\Http\Response|null|void
     */
    public function afterFilter(Event $event)
    {
    }
}
