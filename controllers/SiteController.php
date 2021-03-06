<?php
namespace app\controllers;

use app\models\Menu;
use Yii;
use yii\web\Response;
use yii\web\UploadedFile;
use app\models\LoginForm;
use app\models\RegForm;
use app\models\Listtours;
use app\models\emails;
use app\models\UploadForm;
use app\models\Comments;
use app\models\Payments;
use yii\helpers\ArrayHelper;
use app\models\Office;
use app\models\Partner;


class SiteController extends BaseController
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return ArrayHelper::merge(parent::actions(), [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Register action.
     *
     * @return Response|string
     */
    public function actionReg()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        /* @var $settingModel \app\models\Setting */
        $settingModel = Yii::$app->get('settings')
            ->setModel()
            ->getSettings();

        if ($settingModel->regBlock == 1) {
            return $this->render('regBlock');
        }

        $model = new RegForm();

        if ($model->load(Yii::$app->request->post()) && $model->reg()) {

            if (Yii::$app->getUser()->login($model->getUser())) {
                return $this->goHome();
            }
        }

        return $this->render('reg', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionError() {
        return $this->render('error');
    }
    public function actionTours_search() {
        return $this->render('tours_search');   
    }
    public function actionPay() {
        return $this->render('test.php');
    }
    public function actionContract_offer() {
        return $this->render('contract_offer');
    }
    public function actionIndex_2() {
        return '
        <script type="text/javascript" src="https://ui.sletat.ru/module-5.0/app.js" charset="utf-8"></script>
<script type="text/javascript">sletat.createModule5(\'Search\', {
  cities              : 1312,
  files             : ["https://ui.sletat.ru/module-5.0/theme/dream_dec2015.min.css"],
  currency          : "KZT",
  usePricePerson    : true,
  agencyContact1    : {
    logo            : "http://chemodan.kz/web/img/12.png",
    header          : "???????? ?????????????????????? 257",
    email           : "Callcentre@257.kz"
  },
  enabledCurrencies : ["KZT", "USD"],
  useCard           : false
});</script>
    <span class="sletat-copyright">???????? ???????????????? ???????????? <a href="https://sletat.ru/" title="?????????? ??????????" target="_blank">???????????? ??????????</a> &hellip;</span> 

        ';
    }
    public function actionIssykkul() {
        $request = Yii::$app->request;
        $sec = $request->get('sec');
        if ($sec !== '') {
            $id = (int)preg_replace('/[^0-9]/', '', $sec);
            return $this->render('resort',['resort'=>$id]);
        }
        return $this->render('issykkul');
    }
    public function actionAlakol() {
        $request = Yii::$app->request;
        $sec = $request->get('sec');
        if ($sec !== '') {
            $id = (int)preg_replace('/[^0-9]/', '', $sec);
            return $this->render('resort',['resort'=>$id]);
        }
        return $this->render('alakol');
    }
    public function actionAwards() {
        return $this->render('awards');  
    }
    /*public function actionAdmin() {
        $this->layout = 'admin';
        return $this->render('admin');  
    }*/
    public function actionSavesearch() {
        if (Yii::$app->request->isAjax) {
            $arr = Yii::$app->request->post();
        
            $to = " site.chemodan.kz <site.chemodan.kz@gmail.com>";
            $subject = "?????????????????? ????????????";
    
            $message = '<html>
                <head>
                <title>'.$subject.'</title>
                </head>
                <body>
                <p>'.$subject.'</p>
                <table>
                <tr>
                <td colspan="2">??.??.?? - </td><td>'.$arr['name'].'</td>
                </tr>
                <tr>
                <td colspan="2">?????????????? - </td><td>'.$arr['phone'].'</td>
                </tr>
                <tr>
                <td colspan="2">???? - </td><td>'.$arr['from'][2].'</td>
                </tr>
                <tr>
                <td colspan="2">???????? - </td><td>'.$arr['to'][1].'</td>
                </tr>
                <tr>
                <td colspan="2">???????? - </td><td>'.$arr['date'][0].'</td>
                </tr>
                <tr>
                <td colspan="2">???????????????????? - </td><td>'.$arr['stars'][1].'</td>
                </tr>
                <tr>
                <tr>
                <td colspan="2">???????????????? - </td><td>'.$arr['people'][0].'</td>
                </tr>
                <tr>
                <td colspan="2">?????????? - </td><td>'.$arr['people'][1].'</td>
                </tr>
                <tr>
                <td colspan="2">?????????????????????? - </td><td>'.$arr['comment'].'</td>
                </tr>
                </table>
                </body>
                </html>';
            $headers = "MIME-Version: 1.0 \r\n";
            $headers .= "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: web@chemodan.kz <web@chemodan.kz> \r\n";
            $headers .= "CC: web@chemodan.kz \r\n";
            $headers .= "Bcc: web@chemodan.kz \r\n";
            mail($to,$subject,$message,$headers);
        
        return '';
        }
        return '';
    }
    public function actionAccept() {
        if (isset($_GET['info'])) {
            $info = json_decode($_GET['info'],true);
            $model = new Comments;
            $model->name = $info['name'];
            $model->email = $info['email'];
            $model->comment = $info['comment'];
            $model->img = $info['img'];
            $model->insert();
        }
        return '';
    }

    public function actionUpload() {
        if (Yii::$app->request->isAjax) {
            $arr = Yii::$app->request->post();
            $img_list = [];
            $model = new UploadForm();
            $date = time();
            if (array_key_exists('file_0', $_FILES)) {
                $model->imageFile = UploadedFile::getInstanceByName('file_0');
                $img_list[] = '/'.$model->upload($date.'-0');
            }

            if (array_key_exists('file_1', $_FILES)) {
                $model->imageFile = UploadedFile::getInstanceByName('file_1');
                $img_list[] = '/'.$model->upload($date.'-1');
            }

            if (array_key_exists('file_2', $_FILES)) {
                $model->imageFile = UploadedFile::getInstanceByName('file_2');
                $img_list[] = '/'.$model->upload($date.'-2');
            }

            if (array_key_exists('file_3', $_FILES)) {
                $model->imageFile = UploadedFile::getInstanceByName('file_3');
                $img_list[] = '/'.$model->upload($date.'-3');
            }

            if (array_key_exists('file_4', $_FILES)) {
                $model->imageFile = UploadedFile::getInstanceByName('file_4');
                $img_list[] = '/'.$model->upload($date.'-4');
            }
            
            $arr['img'] = $img_list;

            $data = json_decode($arr['main']);

            $comment = new Comments();
            $comment->name = $data->name;
            $comment->email = $data->email;
            $comment->comment = $data->comment;
            $comment->ss = '1';
            $comment->img = json_encode($arr['img']);
            $comment->save();

            return 'success';
        }
    }

    public function actionCall() {
        return $this->render('call');
    }
    public function actionPromo() {
        $request = Yii::$app->request;
        $sec = $request->get('sec');
        if ($sec === 'promo_italy') {
            return $this->render('promo_italy');
        }
        return $this->render('dino_park');  
    }
    public function actionTourget() {
        if (Yii::$app->request->isAjax) {
            $arr = Yii::$app->request->post();
            $model = new Listtours;
            $model->num = $arr['id'];
            $model->name = $arr['name'];
            $model->phone = $arr['phone'];
            $model->city = $arr['cities'];
            $model->insert();
            return '';
        }
        return '404 error';
    }
    public function actionBooking() {
        return $this->render('booking');
    }
    public function actionIndex() {
        if (Yii::$app->request->isAjax) {
            $arr = Yii::$app->request->post();
            $to = " franchise <franchise@chemodan.kz>";
            $subject = "Franchising";
            $txt = '??.??.??. - '.$arr['name'].'\r\n';
            $txt .= '?????????????? - '.$arr['phone'].'\r\n';
            $txt .= 'Email - '.$arr['email'].'\r\n';
            $txt .= 'City - '.$arr['cities'].'\r\n';
    
            $message = '<html>
                <head>
                <title>Franchising</title>
                </head>
                <body>
                <p>???????????? ???? ??????????????????????</p>
                <table>
                <tr>
                <td colspan="2">??.??.??</td><td>'.$arr['name'].'</td>
                </tr>
                <tr>
                <td colspan="2">??????????????</td><td>'.$arr['phone'].'</td>
                </tr>
                <tr>
                <td colspan="2">Email</td><td>'.$arr['email'].'</td>
                </tr>
                <tr>
                <td colspan="2">City</td><td>'.$arr['cities'].'</td>
                </tr>
                </table>
                </body>
                </html>';
            $headers = "MIME-Version: 1.0 \r\n";
            $headers .= "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: web@chemodan.kz <web@chemodan.kz> \r\n";
            $headers .= "CC: web@chemodan.kz \r\n";
            $headers .= "Bcc: web@chemodan.kz \r\n";
            mail($to,$subject,$message,$headers);
            return '<div class="a-148">?????????????? ???? ???????? ????????????!</div>';
        }

        $offices = Office::find()->where(['publish' => 1])->all();
        $partners = Partner::find()->where(['publish' => 1])->all();

        return $this->render('index', compact('offices', 'partners'));
    }

    public function actionHot() {
        if (Yii::$app->request->isAjax) {
            $arr = Yii::$app->request->post();
            $to = " franchise <franchise@chemodan.kz>";
            $subject = "????????????";
            $txt = '??.??.??. - '.$arr['name'].'\r\n';
            $txt .= '?????????????? - '.$arr['email'].'\r\n';
            $txt .= '???????????? - '.$arr['text'].'\r\n';
    
            $message = '<html>
                <head>
                <title>????????????</title>
                </head>
                <body>
                <p>????????????</p>
                <table>
                <tr>
                <td colspan="2">??.??.??</td><td>'.$arr['name'].'</td>
                </tr>
                <tr>
                <td colspan="2">??????????????</td><td>'.$arr['email'].'</td>
                </tr>
                <tr>
                <td colspan="2">????????????</td><td>'.$arr['text'].'</td>
                </tr>
                </table>
                </body>
                </html>';
            $headers = "MIME-Version: 1.0 \r\n";
            $headers .= "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: web@chemodan.kz <web@chemodan.kz> \r\n";
            $headers .= "CC: web@chemodan.kz \r\n";
            $headers .= "Bcc: web@chemodan.kz \r\n";
            mail($to,$subject,$message,$headers);
            return '';
        }
        return $this->render('hot');
    }

    public function actionContacts() {
        if (Yii::$app->request->isAjax) {
             $arr = Yii::$app->request->post();
             $model = new emails;
             $model->email = $arr['email'];
             $model->insert();
             return;
        }
        return $this->render('contacts');
    }

    public function actionReviews() {
        if (Yii::$app->request->isAjax) {
            /*
            $model = new Tour;
            $model->name = $arr['name'];
            $model->phone = $arr['phone'];
            $model->cities = $arr['cities'];
            $model->type = $arr['tour'];
            $model->insert();
            */
            
            $arr = Yii::$app->request->post();
            $tour = ['turkey' => '????????????', ''];
            $to = $arr['tour']=='franchise'?" franchise <franchise@chemodan.kz>":" site <site.chemodan.kz@gmail.com>";
            $subject = "????????????";  
    
            $message = '<html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p>'.$subject.'</p>
                    <table>
                        <tr>
                            <td colspan="2">??.??.??</td><td>'.$arr['name'].'</td>
                        </tr>
                        <tr>
                            <td colspan="2">??????????????</td><td>'.$arr['phone'].'</td>
                        </tr>
                        <tr>
                            <td colspan="2">??????????</td><td>'.$arr['cities'].'</td>
                        </tr>
                        <tr>
                            <td colspan="2">??????</td><td>'.$arr['tour'].'</td>
                        </tr>
                        <tr>
                            <td colspan="2">????????</td><td>'.date('d.m.Y H:i:s').'</td>
                        </tr>
                        <tr>
                            <td colspan="2">????????????</td><td><a href="chemodan.kz'.$arr['url'].'" target="_blank">??????????</a></td>
                        </tr>
                    </table>
                </body>
            </html>';
            
            $headers = "MIME-Version: 1.0 \r\n";
            $headers .= "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: web@chemodan.kz <web@chemodan.kz> \r\n";
            $headers .= "CC: web@chemodan.kz \r\n";
            $headers .= "Bcc: web@chemodan.kz \r\n";
            mail($to,$subject,$message,$headers);
            
            /*$leads = htmlspecialchars(json_encode(array('url'=>$arr['url'],'comment'=>'???????????? ??????????: '.$arr['cities'].' - ??????: '.$arr['tour'],'phone'=>$arr['phone'],'type'=>0,'name'=>$arr['name'],'email'=>'')));
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,"https://www.chmd-afina.kz/ajax.php");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,
            "leads=".$leads);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $out = curl_exec($ch);
            curl_close($ch);
            */
            return '';
        }
        return $this->render('reviews');
    }

    public function actionFranchise() {
        if (Yii::$app->request->isAjax) {
            $arr = Yii::$app->request->post();

            if ($arr['tours'] == 0) {
                $model = new emails;
                $model->email = $arr['email'];
                $model->insert();
            }

            $to = " site.chemodan.kz <site.chemodan.kz@gmail.com>";
            $subject = "???????????? ???? ???????????? ????????.";
            
            $message = '<html>
                <head>
                <title>???????????? ???? ???????????? ????????.</title>
                </head>
                <body>
                <p>???????????? ???? ???????????? ????????.</p>
                <table>
                <tr>
                <td colspan="2">????????: </td><td>'.$arr['to'].'</td>
                </tr>
                <tr>
                <td colspan="2">????????????: </td><td>'.$arr['from'].'</td>
                </tr>
                <tr>
                <td colspan="2">????????: </td><td>'.$arr['date'].'</td>
                </tr>
                <tr>
                <td colspan="2">??????: </td><td>'.$arr['start'].' - '.$arr['end'].'</td>
                </tr>
                <tr>
                <td colspan="2">????????: </td><td>'.$arr['child'].'</td>
                </tr>
                <tr>
                <td colspan="2">????????????????: </td><td>'.$arr['adult'].'</td>
                </tr>
                <tr>
                <td colspan="2">????????: </td><td>'.$arr['price'].'</td>
                </tr>
                <tr>
                <td colspan="2">??????????????: </td><td>'.$arr['phone'].'</td>
                </tr>
                <tr>
                <td colspan="2">email: </td><td>'.$arr['email'].'</td>
                </tr>
                </table>
                </body>
                </html>';
            $headers = "MIME-Version: 1.0 \r\n";
            $headers .= "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: web@chemodan.kz <web@chemodan.kz> \r\n";
            $headers .= "CC: web@chemodan.kz \r\n";
            $headers .= "Bcc: web@chemodan.kz \r\n";
            mail($to,$subject,$message,$headers);
            return '';
            /*
                a = {
            'to':$("#to_country_list").attr('data-id'),
            'from':$("#from_city_list").attr('data-id'),
            'date':$("#tour_date").val(),
            'start':$("#start_day").val().trim(),
            'end':$("#end_day").val().trim(),
            'adult':$("#adult_list").attr('data-id'),
            'child':$("#child_list").attr('data-id'),
            'start':$("#hotel_stars").attr('data-id'),
            'price':$("#price_amount").attr('data-id'),
            'phone':$("#tour-phone").val().trim(),
            'email':$("#tour-email").val().trim(),
            'tours':$(".a-179").attr('data-id')
        };
            */
        }
        return $this->render('franchise');
    }

    public function actionThanks(){
        return $this->render('thanks_franchise');
    }

    public function actionConfidential() {
        if (Yii::$app->request->isAjax) {
            $GET = Yii::$app->request->post()['chemodan_search'];
            //{"chemodan_search":{"from":"0","to":"2","start-date":"15\/01\/19","end-date":"18\/01\/19","night":"14","adult":"2","child":"1","child_age":["16"],"price":"","currency":"KZT","star":"-","meal":"-"}}
            $FROM_NAME = ['????????????','????????-??????????????????????','????????????','????????????','??????????????????','??????????????','????????????','????????????????','??????????','????????????????','??????????????'];
            
            $CURL = curl_init();
            $URL = 'https://xml.tez-tour.com/xmlgate/auth_data.jsp?j_login_request=1&j_login=SalesOdin&j_passwd=HSJXQAD';
            
            curl_setopt($CURL, CURLOPT_URL, $URL);
            curl_setopt($CURL, CURLOPT_RETURNTRANSFER, true);
            curl_exec($CURL);

            $start = explode('/',$GET['start-date']);
            $end = explode('/',$GET['end-date']);
            
            $start = $start[0].'.'.$start[1].'.20'.$start[2];
            $end = $end[0].'.'.$end[1].'.20'.$end[2];
            
            $cur = $GET['currency']=='KZT'?5561:($GET['currency']=='RUB'?8390:5561);
            $price = (int)$GET['price']>0?(int)$GET['price']:100000;
            $star = $GET['star']=='-'?2568:($GET['star']==5?2570:($GET['star']==4?2569:2568));
            
            $from = [2707/*Almaty*/, 39792/*Ust - Kamenogorsk*/, 18992/*Astana*/, ''/*Atyrau*/, 30693/*Karaganda*/, 50415/*Shymkent*/, 5200/*Aktobe*/, 3008373/*Kostanay*/, ''/*Aktau*/, 10704/*Pavlodar*/, ''/*Uralsk*/];
            $to = ['2'=>1104/*turkey*/];
            $to_name = ['2'=>'????????????'];
            $from_name = ['????????????','???????? - ??????????????????????','????????????','????????????','??????????????????','??????????????','????????????','????????????????','??????????','????????????????','??????????????'];

            $child = '';
            $i = 0;
            
            //{"from":"0","to":"2","start-date":"28\/01\/19","end-date":"31\/01\/19","night":"14","adult":"2","child":"0","price":"","currency":"KZT","star":"-","meal":"-"}
            
            if (array_key_exists('child_age', $GET)) {
                if ($GET['child_age']!==null) {
                    foreach ($GET['child_age'] as $key=>$val) {
                        $child .= '&birthday'.++$i.'='.date('d.m.Y', strtotime('-'.$val.' year'));
                    }
                }
            }
            

            

            $URL = 'http://search.tez-tour.com/tariffsearch/getResult?accommodationId=2&after='.$start.'&before='.$end.'&cityId='.$from[$GET['from']].'&countryId='.$to[$GET['to']].'&cy='.$cur.'&hotelClassBetter=true&hotelClassId='.$star.'&hotelInStop=false&locale=ru&nightsMax='.($GET['night']+2).'&nightsMin='.$GET['night'].'&noTicketsFrom=false&noTicketsTo=false&priceMax='.$price.'&priceMin=0&rAndBBetter=true&formatResult=true&xml=false'.$child;
            
            
            $CURL = curl_init();
        
            curl_setopt_array($CURL, array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_URL =>$URL,
            ));
            
            //return curl_exec($CURL);
            
            $RES = json_decode(curl_exec($CURL), true);
            

            $MAIN = [];
            
            if (isset($RES['data'])) {
                if (sizeof($RES['data'])>0) {
                    foreach ($RES['data'] as $key=>$val) {
                        $MAIN[] = $val;
                    }
                }
            }
            
            $HTML = '';
            $ALL = [];
            
            foreach ($MAIN as $key=>$val) {
                //'.htmlspecialchars(json_encode($val)).'
                $star = (int)substr($val[6][1], -4);
                $name = substr($val[6][1],0,-4);
                
                $people = [];
                
                //[{"description":"child0 - 2","touristCount":1,"price":"0"},{"description":"adult","touristCount":2,"price":"0"}]
                $adult = 0;
                $child = 0;
                foreach ($val[10]['flightsFrom'] as $k=>$v) {
                    if ($v['description']=='child0 - 2') {
                        $child = $v['touristCount'];
                        $people[] = '????????: '.$v['touristCount'];
                    } else if ($v['description']=='adult') {
                        $adult = $v['touristCount'];
                        $people[] = '????????????????: '.$v['touristCount'];
                    }
                }
                
                if (!array_key_exists($name, $ALL)) $ALL[$name] = [];
                
                $ALL[$name][] = ['booking'=>$val[11][0][0],'to'=>$to_name[ $GET['to'] ],'room'=>$val[8][1],'from'=>$from_name[ $GET['from'] ],'name'=>$name,'day'=>$val[3],'sum'=>$val[10]['total'].'$','child'=>$child,'adult'=>$adult,'people'=>(sizeof($people)>0?implode(', ', array_reverse($people)):''),'url'=>$val[6][2],'star'=>$star,'date'=>$val[4],'cities'=>$val[5][1],'meal'=>$val[7][1],'operator'=>'tez-tour'];
                
                if (sizeof($people)>0) $people = implode(', ', array_reverse($people)); else $people = '';
                
                
            }
            
            //return json_encode($ALL);
            
            
            //{"day":15,"sum":"1359","child":0,"adult":2,"people":"\u0412\u0437\u0440\u043e\u0441\u043b\u044b\u0435: 2","url":"","star":3,"date":"04.02","flight":"ANTALYA"},
            $ONE = [];


            foreach ($ALL as $key=>$val) {
                
                $day = 0;
                $sum = 0;
                $star = '';
                $child = 0;
                $adult = 0;
                $people = '';
                $date = '';
                $city = '';
                $meal = '';
                $url = '';
                
                for ($i=0,$k=sizeof($val);$i<$k;$i++) {
                    
                    if ($sum === 0 || $sum > $val[$i]['sum']) {
                        $day = $val[$i]['day'];
                        $sum = $val[$i]['sum'];
                        $star = $val[$i]['star'];
                        $child = $val[$i]['child'];
                        $adult = $val[$i]['adult'];
                        $people = $val[$i]['people'];
                        $date = $val[$i]['date'];
                        $city = $val[$i]['cities'];
                        $meal = $val[$i]['meal'];
                        $url = $val[$i]['url'];
                        $ONE = $val[$i];
                    }
                    
                }
                
                $HTML .= '<div class="a-369a" data-id="'.htmlspecialchars(json_encode($ALL[$key])).'" data-one="'.htmlspecialchars(json_encode($ONE)).'"><div class="a-383"><button class="a-384" onclick="return page.oneTouristSel(this);">???????? '.$sum.'<div></div><div>'.$val['total'].'</div></button></div> </div>';
                continue;

                $HTML .= '<div class="a-369a" data-id="'.htmlspecialchars(json_encode($ALL[$key])).'" data-one="'.htmlspecialchars(json_encode($ONE)).'"><div class="a-383"><button class="a-384" onclick="return page.oneTouristSel(this);">???????? '.$sum.'<div></div><div>'.$val['total'].'</div></button></div> <div class="a-369"><div class="a-370" '.($url!=''?'style="background-image: url('.$url.');"':'style=" -webkit-filter: grayscale(100%);filter: grayscale(100%);"').'></div><div class="a-371"><div class="a-375"><div class="a-373"><div class="a-374 a-374-'.$star.'"></div></div> <div class="a-376">'.$date.'</div> </div><div class="a-372">'.$key.'</div><div class="a-377">'.$city.'</div> <div class="a-378"><div class="a-379"><div class="a-379a"></div><div>???? '.$day.' ?????????? ???? '.$FROM_NAME[ $GET['from'] ].'</div></div> <div class="a-380"><div class="a-380a"></div><div class="a-380b">'.$meal.'</div></div> <div class="a-381"><div class="a-381a"></div><div class="a-381b">'.$people.'</div></div> </div> </div></div>'.($k>1?'<div class="a-385" onclick="return page.showFullTourInfo(this);">???????????????????? ?????? ???????? ?? ??????????</div>':'').'</div>';
                
            }

            
            /*
            $HTML .= '<div class="a-369a" data-id="'.htmlspecialchars(json_encode($val)).'"><div class="a-383"><button class="a-384">'.$val[10]['total'].'<div></div><div>'.$val['total'].'</div></button></div> <div class="a-369"><div class="a-370" '.($val[6][2]!=''?'style="background-image: url('.$val[6][2].');"':'style=" -webkit-filter: grayscale(100%);filter: grayscale(100%);"').'></div><div class="a-371"><div class="a-375"><div class="a-373"><div class="a-374 a-374-'.$star.'"></div></div> <div class="a-376">'.$val[4].'</div> </div><div class="a-372">'.$name.'</div><div class="a-377">'.$val[5][1].'</div> <div class="a-378"><div class="a-379"><div class="a-379a"></div><div>20.01 ???? 8 ????????
???? Almaty</div></div> <div class="a-380"><div class="a-380a"></div><div class="a-380b">'.$val[7][1].'</div></div> <div class="a-381"><div class="a-381a"></div><div class="a-381b">'.$people.'</div></div> </div> </div></div></div>';
            */
            
            return $HTML;
            /*
            <div class="a-342" onmousedown="return page.stop(event);" style="display: block;">
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="2" data-value="????????????">????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="30" data-value="????????????">????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="21" data-value="??????-??????????">??????-??????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="32" data-value="????????">????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="12" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="4" data-value="????????????">????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="8" data-value="????????????">????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="31" data-value="????????">????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="18" data-value="????????????????">????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="23" data-value="??????">??????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="5" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="6" data-value="??????????">??????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="40" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="11" data-value="????????????????????">????????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="26" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="7" data-value="??????????????????????">??????????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="27" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="12" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="6" data-value="??????????">??????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="14" data-value="??????????????????">??????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="15" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="37" data-value="????????????????????">????????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="16" data-value="????????????">????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="3" data-value="??????????">??????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="23" data-value="????????????????????">????????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="17" data-value="????????????????">????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="1" data-value="????????????">????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="20" data-value="????????????????">????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="25" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="22" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="9" data-value="??????????">??????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="0" data-value="??????????????????">??????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="38" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="33" data-value="????????????">????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="34" data-value="??????????">??????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="28" data-value="????????????????">????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="29" data-value="????????????????">????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="35" data-value="????????????????">????????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="36" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="39" data-value="??????????????">??????????????</div>
                            <div class="a-345" onclick="return page.dropSel(this)" data-id="41" data-value="??????????????">??????????????</div>
                        </div>
            */
            
            
            
            /*
            $URL = 'https://xml.tez-tour.com/xmlgate/auth_data.jsp?j_login_request=1&j_login=SalesOdin&j_passwd=HSJXQAD';
            
            curl_setopt($CURL, CURLOPT_URL, $URL);
            curl_setopt($CURL, CURLOPT_RETURNTRANSFER, true);
            
            //$START_PLACE['teztour'][ $INFO['from_country'][0] ]['cities'][ $INFO['from_country'][1] ]
            
            $URL = 'http://search.tez-tour.com/tariffsearch/getResult?accommodationId=2&after='.$_POST['date']['from'].'&before='.$_POST['date']['to'].'&cityId='.$START_PLACE['teztour'][ $_POST['from']['country'] ]['cities'][ $_POST['from']['cities'] ].'&countryId='.$START_PLACE['teztour'][ $_POST['to']['country'] ]['code'].'&cy=5561&hotelClassBetter=true&hotelClassId=2569&hotelInStop=false&locale=ru&nightsMax='.($_POST['range']+2).'&nightsMin='.$_POST['range'].'&noTicketsFrom=false&noTicketsTo=false&priceMax=100000&priceMin=0&rAndBBetter=true&formatResult=true&xml=false'.$child;
            */
            
            $START = explode('/',$GET['start-date']);
            $START = '20'.$START[2].$START[1].$START[0];
            $END = explode('/',$GET['end-date']);
            $END = '20'.$END[2].$END[1].$END[0];
            $START_COUNT = 1;
        
            $child_1 = '';
            
            $town = [9/*????????????*/,178/*????????-??????????????????????*/,12/*????????????*/,115/*????????????*/,103/*??????????????????*/,17/*??????????????*/,105/*????????????*/,15/*????????????????*/,109/*??????????*/,13/*????????????????*/,0/*??????????????*/];
        
            $city = ['2'=>17];
            
            $URL = 'http://online.kompastour.kz/export/default.php?samo_action=api&version=1.0&oauth_token=43fc8ef36c7749f189c9a7680c37cfb6&type=json&action=SearchTour_PRICES&STATEINC='.$city[ $GET['to'] ].'&TOWNFROMINC='.$town[ $GET['from'] ].'&CHECKIN_BEG='.$START.'&CHECKIN_END='.$END.'&NIGHTS_FROM='.($GET['night']-1).'&NIGHTS_TILL='.($GET['night']+1).'&ADULT='.$GET['adult'].'&CHILD='.$GET['child'].'&AGES='.$child_1.'&CURRENCY=2&PACKET=0&PRICEPAGE='.$START_COUNT.'&STARS_ANY=1&DOLOAD=1&MEALS_ANY=1&TOWNS_ANY=1&COSTMIN=0&COSTMAX='.$GET['price'];
            
            
            curl_setopt($CURL, CURLOPT_HTTPHEADER, array(
                "Host: ".$URL,
                "Accept: application/json, text/javascript, */*; q=0.01",
                "Accept-Language: en-us,en;q=0.5",
                "Content-Type: application/cap+xml;charset=utf-8",
                "X-NewRelic-ID: UQIGUlJXGwACUFZaAAM=",
                "X-Requested-With: XMLHttpRequest",         
                "Connection: keep-alive",
                "Pragma: no-cache",
                "Cache-Control: no-cache"
            ));

            $OUT = curl_exec($CURL);
            return $OUT;
            
            $CURL = curl_init();
        
            curl_setopt_array($CURL, array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_URL =>$URL,
            ));
        
            $RES = curl_exec($CURL);//json_decode(curl_exec($CURL), true);
        
            
            return $RES;
        }
        return $this->render('confidential');
    }
    public function actionCountries() {
        $request = Yii::$app->request;
        $sec = $request->get('sec');
        if ($sec === 'bulgaria') {
            return $this->render('bulgaria');
        } elseif ($sec === 'vietnam') {
            return $this->render('vietnam');
        } elseif ($sec === 'greece') {
            return $this->render('greece_country');
        } elseif ($sec === 'india') {
            return $this->render('india');
        } elseif ($sec === 'china') {
            return $this->render('china');
        } elseif ($sec === 'cuba') {
            return $this->render('cuba');
        } elseif ($sec === 'malaysia') {
            return $this->render('malaysia');
        } elseif ($sec === 'georgia') {
            return $this->render('georgia_country');
        } elseif ($sec === 'dominicana') {
            return $this->render('dominicana_country');
        } elseif ($sec === 'egypt') {
            return $this->render('egypt_country');
        } elseif ($sec === 'maldives') {
            return $this->render('maldives');
        } elseif ($sec === 'uae') {
            return $this->render('uae_country');
        } elseif ($sec === 'thailand') {
            return $this->render('thailand_country');
        } elseif ($sec === 'turkey') {
            return $this->render('turkey_country');
        }
        return $this->render('countries');
    }
    public function actionSearch() {
        return $this->render('search_section');
    }
    public function actionCruises() {
        return $this->render('cruises');
    }
    public function actionServices() {
        $request = Yii::$app->request;
        $sec = $request->get('sec');
        if ($sec === 'club') {
            return $this->render('club');
        } else if ($sec === 'cruises') {
            return $this->render('cruises');
        } elseif ($sec === 'hot') {
            return $this->render('hot_tours');
        } elseif ($sec === 'search') {
            return $this->render('search_tours');
        } elseif ($sec === 'hotels') {
            return $this->render('hotels');
        } elseif ($sec === 'avia') {
            return $this->render('avia');
        } elseif ($sec === 'cruises') {
            return $this->render('cruises');
        } elseif ($sec === 'insurance') {
            return $this->render('insurance');
        } elseif ($sec === 'bonus') {
            return $this->render('bonus');
        } elseif ($sec === 'sert') {
            return $this->render('sert');
        } elseif ($sec === 'credit') {
            return $this->render('credit');
        } elseif ($sec === 'taxi') {
            return $this->render('taxi');
        } elseif ($sec === 'closed') {
            return $this->render('closed');
        } elseif ($sec === 'pay') {
            return $this->render('pay');
        } elseif ($sec === 'educate') {
            return $this->render('educate');
        } elseif ($sec === 'paybox') {
            return $this->render('paybox');
        } elseif ($sec === 'robokassa') {
            return $this->render('robokassa');
        }
        return $this->render('services');
    }
    public function actionOffice() {
        $request = Yii::$app->request;
        $sec = $request->get('sec');
        if ($sec === 'about') {
            return $this->render('about');
        } elseif ($sec === 'team') {
            return $this->render('team');
        } elseif ($sec === 'vacant') {
            return $this->render('vacant');
        } elseif ($sec === 'cloudpayments') {
            return $this->render('cloudpayments');
        }
        /*
        $section = $request->get('tab');
        if ($section === '') {

        }
        */

        return $this->render('offices');
    }
    public function actionTours() {
        $request = Yii::$app->request;
        $country = $request->get('country');
        if ($country) {
            if ($country === 'turkey') {
                return $this->render('turkey');
            } elseif ($country === 'uae') {
                return $this->render('uae');
            } elseif ($country === 'greece') {
                return $this->render('greece');
            } elseif ($country === 'egypt') {
                return $this->render('egypt');
            } elseif ($country === 'georgia') {

                return $this->render('georgia');

            } elseif ($country === 'thailand') {

                return $this->render('thailand');

            } elseif ($country === 'dominicana') {

                return $this->render('dominicana');

            } elseif ($country === 'bulgaria') {

                return $this->render('bulgaria_tour');

            } elseif ($country === 'turkey_aktau') {// DONE

                return $this->render('turkey_aktau');

            } elseif ($country === 'uae_aktau') {// DONE

                return $this->render('uae_aktau');

            } elseif ($country === 'greece_aktau') {// DONE

                return $this->render('greece_aktau');

            } elseif ($country === 'egypt_aktau') {// DONE

                return $this->render('egypt_aktau');

            } elseif ($country === 'thailand_aktau') {// DONE

                return $this->render('thailand_aktau');

            } elseif ($country === 'dominicana_aktau') {

                return $this->render('dominicana_aktau');
            }
            
        }

        return $this->render('tours');
    
    }

    public function actionPayment()
    {
        $request = Yii::$app->request;
        $post = $request->post();
        $model = new Payments;
        $model->client_name = $post['first_name'];
        $model->office_id = $post['office_id'];
        $model->amount = $post['sum'];
        $model->save();
        $lastInsertId = $model->id;

        $office_id = $post['office_id'];
        if ($office_id == 1) {
            $pg_merchant_id = 517589;
            $salt = "Z7GHxW3dvplvKodq";
        } elseif($office_id == 2) {
            $pg_merchant_id = 519482;
            $salt = "FpV3YWJxe2p8d0yp";
        }
        $request = [
            'pg_merchant_id'=> $pg_merchant_id,
            'pg_amount' => $post['sum'],
            'pg_salt' => $salt,
            'pg_order_id' => $lastInsertId,
            'pg_description' => '???????????????? ????????????',
            'pg_success_url' => 'https://chemodan.kz/pay/paybox',
            'pg_failure_url' => 'https://chemodan.kz/pay/paybox_error',
        ];

        //$request['pg_testing_mode'] = 1; //add this parameter to request for testing payments

        //if you pass any of your parameters, which you want to get back after the payment, then add them. For example:
        $request['client_name'] = $post['first_name'];
        $request['office_id'] = $post['office_id'];
        // $request['client_address'] = 'Earth Planet';

        //generate a signature and add it to the array
        ksort($request); //sort alphabetically
        array_unshift($request, 'payment.php');
        array_push($request, $salt); //add your secret key (you can take it in your personal cabinet on paybox system)


        $request['pg_sig'] = md5(implode(';', $request));

        unset($request[0], $request[1]);

        $query = http_build_query($request);

        //redirect a customer to payment page
        header('Location:https://api.paybox.money/payment.php?'.$query);
    }

    public function actionPaybox()
    {
        $request = Yii::$app->request;
        $get = $request->get();
        $model = Payments::findOne($get['pg_order_id']);
        if ($model !== null) {
            $model->pg_payment_id = $get['pg_payment_id'];
            $model->pg_salt = $get['pg_salt'];
            $model->pg_sig = $get['pg_sig'];
            $model->save();
        }
        return $this->render('paybox_thanks');
    }

    public function actionPayboxError()
    {
        $request = Yii::$app->request;
        $get = $request->get();
        return $this->render('paybox_error', ['error' => $get]);
    }
	
	public function actionHomecreditbank()
	{
		return $this->render('homecreditbank');
	}
	
	public function actionSign()
	{
		return $this->render('cmssign');
	}
	
	public function actionRobokassa()
    {
        $request = Yii::$app->request;
        $post = $request->post();
        $client_name = $post['first_name'];
        $office_id = $post['office_id'];
        $sum = $post['sum'];

        var_dump($post);
    }
}

/*
INSERT INTO `BTours` VALUES(NULL,'almaty','thailand','Fortuna Phuket - ??????????????','??Fortuna Phuket?? - ???????????????????????????? ??????????, ?????????????????????? ???? ?????????? ???? ?????????????????????? ?????????????? ???????????????? ??? ??. ????????????. ???????????? ?????????????? ????????, ???????????? ????????, ???????????????????????? ?????????????? ??????????????, ???????????????????????????? ?????????????? ??????????????, ???????????????? ?????????????? ???????????????????? ?? ?????????????????? ???????????? - ???????????????????? ???????? ?????????????????? ???????????????? ???? ???????????? ?????????????? ????????.

???????????? ?????????????????????? ???????????????????? ???? ?????????????????????? ?????????? ?? ???????????????? ?? ????????????????. ?? ???????????????? ?????????????????? ?????????????????????????? ???????????????? ???????????????????????? ????????????????. ?????? ?????????????????? ???????????????? ?? ???????????? ?????????????? ??????????????, ???????????????? ?????????? ???? ????????. ?????????????????????????? ????????????????????????, ?????????? ???????????? ???????? ?????????????????????? ?????????????????????? ?? ???????????????????????????????? ?? ???????????????? ?? ???????????????????????? ??????????????????????. ?????? ???????????????????????????? ?????????????? ?? ???????????????????????? ??????????????, ????????-????????????, ??????????????????????????, ??????????????????????????, ???????????????????????? ?? ???????????????????? ??????????????, ?????????????? ?? ???????????? ?? ???????????????????????????? ????????????????????, ?? ?????????? ???????????????????? ?????????????????????????? ????????????????.

?????? ?????????????? ?????????? ?????? ????????, ?????????? ?????????????? ???????????????? ?????????? ?? ?????????? ????????????. ???????????????? ?????????? ?? ???????????????????????????? ???????????? ???????? ?? ????????????????????, ?????????????????????? ?? ???????? ??????????????????. ?????? ???????????? ???????????????????????????? ?????????? ???? ???????????? ?????????? ????????.',now(),'["web/img/t37.jpg","web/img/t38.jpg","web/img/t39.jpg","web/img/t40.jpg"]','12','','0','163 125','{"website":"","phone":"+76 (34) 57 00","email":"","distance":"","wifi":"false","parking":"false","meal":"false","transport":"false","beach":"false","star":3,"map":[98.363876,7.98105]}');
*/
