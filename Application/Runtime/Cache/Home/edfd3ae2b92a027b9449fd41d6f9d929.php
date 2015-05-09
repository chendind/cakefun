<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <meta name="description" content="在线蛋糕DIY，现做蛋糕送上门">
     <title>cakefox</title>
     <link href="" rel="icon">
     <link href="/cakefox/Public/css/public.css" rel="stylesheet">
     <link href="/cakefox/Public/css/font-awesome.min.css" rel="stylesheet">
     <!--[if lt IE 9]><link href="/cakefox/Public/css/font-awesome-ie7.min.css" rel="stylesheet"><![endif]-->
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/public.less">
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/about.less">
     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
     <style>
        .column p{
          text-indent: 2em;
          line-height:22px;
          font-size:14px;
        }
        .column h4{
          font-size:16px;
        }
     </style>
  </head>
  <body>
    <div class="header" style="" controller="HeaderController">
    <div class="centerbox" style="height:28px;overflow:visible;">
      <div class="logo-sm"><img src="/cakefox/Public/img/cakewithme2.png" /></div>
      <ul class="header-nav" style="margin-left:200px;">
        <li><a href="/cakefox/index.php/Home/Index/index.html">主页</a></li>
        <li><a href="/cakefox/index.php/Home/Index/customize.html">定制蛋糕</a></li>
        <li><a href="/cakefox/index.php/Home/Index/mall.html">商城</a></li>
        <li><a href="/cakefox/index.php/Home/Index/about.html">关于我们</a></li>
      </ul>
      <ul class="header-nav" style="float:right;">
          
      <!-- 未登录 -->
          <li>
            <a href="/cakefox/index.php/Home/Index/login.html" style="padding:4px;">
              <span class="headusername">登录</span>
            </a>
          </li>
          <li>
            <a href="/cakefox/index.php/Home/Index/register.html" style="padding:4px;">
              <span class="headusername">注册</span>
            </a>
          </li>
      <!-- 未登录 -->


       <!-- 已登录 -->
          <li>
            <a href="/cakefox/index.php/Home/Index/user.html">
              <img class="headuserimg" id="user_img" src="/cakefox/Uploads/<?php echo ($userimg); ?>" />
              <span class="headusername"><?php echo ($username); ?></span>
            </a>
          </li>
          <li>
            <a href="/cakefox/index.php/Home/Index/userinfo.html" style="padding:4px;">
              <i class="fa fa-fw fa-cog"></i>
            </a>
          </li>
          <li id="cartli">
            <a href="/cakefox/index.php/Home/Index/cart.html" style="padding:4px;"><i class="fa fa-fw fa-shopping-cart"></i></a>
             <div id="cartdialogbox" style="display:none;">
              <div class="loadingbox">
                <i class="fa fa-spinner fa-spin"></i>
              </div>
              <div class="cartdialog"></div>
            </div> 
          </li>
        <!-- 已登录 -->
      </ul>
      </div>
    </div>
</div>

    <div class="fullbox" style="height:300px;overflow:hidden;">
      <img class="aboutheader" src="/cakefox/Public/img/aboutheader.jpg" alt="aboutheader" />
    </div> 
    <div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
      <div class="centerbox">
        <ul class="nav-step">
        <li style="width:17.5%;"><a href="/cakefox/index.php/Home/Index/about.html">Cakewith.ME</a></li>
        <li><a href="/cakefox/index.php/Home/Index/buy&delivery.html">购买&配送</a></li>
        <li><a href="/cakefox/index.php/Home/Index/complain&right.html">投诉&维权</a></li>
        <li class="stephere"><a href="/cakefox/index.php/Home/Index/agreement.html">条款协议</a></li>
        <li><a href="/cakefox/index.php/Home/Index/serviceforbusiness.html">企业服务</a></li>
        <li><a href="/cakefox/index.php/Home/Index/job.html">招贤纳士</a></li>
      </ul>
      </div>
    </div>
    <div class="fullbox">
      <div class="centerbox">
        <p class="aboutlead">
          Cakewith.ME 对所有注册会员负责。我们有以下详细的会员注册协议。
            
        </p>
          <div class="column three-fourth" style="padding-right:30px;">
            <h1 class="aboutquestion" style="text-align:center;">Cakewith.ME会员注册协议</h1>
            <p>
              《Cakewith.ME会员注册协议》（以下简称“本协议”）是您与Cakewith.ME网站（网址：www.cakewith.me）所有者（以下简称为“Cakewith.ME”）之间就Cakewith.ME网站服务等相关事宜所订立的契约，请您仔细阅读本协议，本协议即构成对双方有约束力的法律文件。
</p><p>
如果您访问Cakewith.ME网站或在Cakewith.ME网站购物，或以任何行为实际使用、享受Cakewith.ME网站的服务，即表示您接受了本协议，并同意受本协议各项条款的约束。如果您不同意本协议中的任何内容，您可以选择不使用本网站服务。
</p><p>
本协议包括协议正文及所有Cakewith.ME网站已经发布的或将来可能发布或更新的各类规则（在该等规则中Cakewith.ME网站或被简称为“Cakewith.ME”），所有规则为本协议不可分割的组成部分，与本协议正文具有同等法律效力。您应当仔细阅读本协议的正文内容及其所属各类规则。
</p><p>
Cakewith.ME网站有权根据需要不时地制订、修改本协议及/或各类规则，并以网站公示的方式进行公告，不再单独通知您。修订后的协议或将来可能发布或更新的各类规则一经在网站公布后，立即自动生效。如您不同意相关修订，应当立即停止使用Cakewith.ME网站服务。您继续使用Cakewith.ME网站服务，即表示您接受经修订的协议或规则。
</p><h4>
一、 Cakewith.ME网站账户
</h4><p>
1、 用户在注册成为Cakewith.ME网站用户时所提供的信息应真实、完整、有效，并保证Cakewith.ME网站可以通过该等信息与用户本人进行联系。同时，用户也有义务在相关资料发生变更时及时更新注册信息。
</p><p>
2、 在成功注册后，Cakewith.ME网站会为每位用户开通一个账户，作为其使用Cakewith.ME网站服务的唯一身份标识，用户应妥善保管该账户的用户名和密码，并对在其账户项下发生的所有行为负责。用户不得以任何形式转让或授权他人使用自己的Cakewith.ME网站账户。
</p><p>
3、 每位用户只允许拥有一个Cakewith.ME网站账户。如有证据证明或Cakewith.ME网站有理由相信用户存在注册多个Cakewith.ME网站账户的情形，Cakewith.ME网站有权采取取消订单、冻结或关闭账户、拒绝提供服务等措施，给Cakewith.ME网站及相关方造成损失的，用户还应承担赔偿责任。
</p><p>
4、 Cakewith.ME网站用户必须是具有完全民事行为能力的自然人，或者是具有合法经营资格的实体组织。无民事行为能力、限制民事行为能力人以及无经营或特定经营资格的组织不得注册为Cakewith.ME网站用户或超过其民事权利或行为能力范围在Cakewith.ME网站进行交易，如否，Cakewith.ME网站有权采取取消订单、冻结或关闭账户、拒绝提供服务等措施，给Cakewith.ME网站及相关方造成损失的，用户还应承担赔偿责任。
</p><h4>
二、 交易平台服务
</h4><p>
1、Cakewith.ME将尽最大努力保证用户所购商品与网站上公布的价格一致，但价目表和声明并不构成要约。Cakewith.ME有权在发现了其网站上显现的产品及订单的明显错误或缺货的情况下，单方面撤回任何承诺。同时，Cakewith.ME保留对产品订购的数量的限制权。
</p><p>
2、产品的价格和可获性都在Cakewith.ME网上指明。这类信息将随时更改且不发任何通知。商品的价格都包含了法律规定的税金。如果发生了意外情况，在确认了用户的订单后，由于供应商提价，税额变化引起的价格变化，或是由于网站的错误等造成商品价格变化，用户有权取消订单，并希望用户能及时通过电子邮件或电话通知Cakewith.ME客户服务部。用户所订购的商品，如果发生缺货，用户有权取消定单。
</p><p>
3、 用户同意Cakewith.ME网站在发现Cakewith.ME网站上显示的商品信息错误或缺货的情况下，有权撤回或修改该等信息，并对商品订购数量有限制权。用户提交订单即表示用户对其订单中所确认的订购商品、收货地址等信息的准确性负责。
</p><p>
4、配送费用将根据Cakewith.ME网站上公布的配送政策和用户选择的送货方式另行计收。Cakewith.ME网站有权更改上述有关价格和配送费用的信息，而不做另行通知。
</p><h4>
三、 用户的权利和义务
</h4><p>
1、 用户有权根据本协议的约定，以及Cakewith.ME网站上发布的相关规则在Cakewith.ME网站上查询商品信息、订购具体商品、参加Cakewith.ME网站的有关活动，以及使用Cakewith.ME网站提供的其他服务。
</p><p>
2、 用户应当保证在Cakewith.ME网站购买商品过程中遵守诚实信用原则，不扰乱网上交易的正常秩序。
</p><p>
3、 用户享有言论自由权利，并拥有适度修改、删除自己发表的文章的权利。
</p><p>
4、 用户不得在Cakewith.ME网站发表包含以下内容的言论：
</p><p>
① 反对宪法所确定的基本原则，煽动、抗拒、破坏宪法和法律、行政法规实施的；</p><p>
② 煽动颠覆国家政权，推翻社会主义制度，煽动、分裂国家，破坏国家统一的；</p><p>
③ 损害国家荣誉和利益的；</p><p>
④ 煽动民族仇恨、民族歧视，破坏民族团结的；</p><p>
⑤ 任何包含对种族、性别、宗教、地域内容等歧视的；</p><p>
⑥ 捏造或者歪曲事实，散布谣言，扰乱社会秩序的；</p><p>
⑦ 宣扬封建迷信、邪教、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；</p><p>
⑧ 公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；</p><p>
⑨ 损害国家机关信誉的；</p><p>
⑩ 其他违反宪法和法律行政法规的。</p><p>
</p><p>
5、 未经Cakewith.ME网站同意，禁止用户在Cakewith.ME网站上发布任何形式的广告。
</p><h4>
四、 Cakewith.ME网站的权利和义务
</h4><p>
1、 Cakewith.ME网站有义务在现有技术上维护整个网站的正常运行，并努力提升和改进技术，使用户网上交易活动得以顺利进行。</p><p>
2、 对于用户在Cakewith.ME网站上做出下列行为的，Cakewith.ME网站有权做出相应处理，而无须事先通知用户或取得用户同意：</p><p>
</p><p>
① Cakewith.ME网站有权对用户的注册信息及购买行为进行查阅，如发现注册信息或购买行为中存在任何问题的，有权向用户发出询问及要求改正或者做出冻结或关闭账户、取消订单等处理；</p><p>
② 用户违反本协议规定或有违反法律法规和地方规章的行为的，Cakewith.ME网站有权删除其信息，禁止用户发言，限制用户订购，注销用户账户并按照相关法律规定向相关主管部门进行披露；</p><p>
③ 对于用户在Cakewith.ME网站进行的下列行为，Cakewith.ME网站有权对用户采取删除其信息，禁止用户发言，限制用户订购，注销用户账户等限制性措施：包括（i）发布或以电子邮件或以其他方式传送存在恶意、虚假和侵犯他人人身财产权利内容的信息；（ii）进行与网上购物无关或不是以购物为目的的活动，试图扰乱正常购物秩序；将有关干扰、破坏或限制任何计算机软件、硬件或通讯设备功能的软件病毒或其他计算机代码、档案和程序之资料，加以上载、发布、发送电子邮件或以其他方式传送；（iv）干扰或破坏Cakewith.ME网站和服务或与Cakewith.ME网站和服务相连的服务器和网络；或（v）发布其他违反公共利益或可能严重损害Cakewith.ME网站和其他用户合法利益的信息；
</p><p>
3、 用户在此授予Cakewith.ME网站无偿、永久的独家使用权，并有权对该使用权进行再授权，以使Cakewith.ME网站有权在全球范围内全部或部分地使用、复制、修改、改写、发布、翻译和展示用户登记或发布在Cakewith.ME网站上的各类信息，或制作其派生作品，和/或以现在已知或日后开发的任何形式、媒体或技术，将上述信息纳入Cakewith.ME网站其他作品内。
</p><h4>
五、 交易平台服务规则
</h4><p>
1、 价格变动规则 ：Cakewith.ME将尽最大努力保证用户所购商品或服务价格与网站公布的价格一致，尽管做出最大的努力，Cakewith.ME网站上的商品或服务中的一小部分仍可能会有定价误差。如果发现错误定价，Cakewith.ME将采取下列措施：
</p><p>
① 如果某一商品或服务的错误定价高于正确定价，商家将按照较低的定价向用户销售该等商品或服务；</p><p>
② 如果某一商品或服务的错误定价低于正确定价，商家会根据情况，在交付商品前联系用户达成共识，或者取消订单并通知用户。
</p><p>
2、 商品缺货规则：由于市场变化及各种以合理商业努力难以控制的因素的影响，Cakewith.ME无法承诺用户通过提交订单所希望购买的商品都会有货；用户订购的商品或服务如果发生缺货，用户和Cakewith.ME皆有权取消该订单。
</p><p>
3、 邮件/短信/微信服务规则：当用户访问Cakewith.ME网站或给Cakewith.ME网站发送电子邮件时，用户同意以电子方式与Cakewith.ME网站进行联系，并同意以电子方式接收Cakewith.ME网站的信息。Cakewith.ME网站有权通过电子邮件和/或短信和/或微信等方式向用户发送通知、订单信息、促销活动等信息，如果用户访问Cakewith.ME网站，或在Cakewith.ME网站注册、购物及使用其他服务，则表明用户已同意接收该等信息。如用户不希望接收来自于Cakewith.ME网站除了通知、订单信息以外的电子邮件和/或短信和/或微信，则Cakewith.ME网站可根据用户申请办理退阅。
</p><p>
4、 配送规则：Cakewith.ME负责将订购商品配送到用户指定的收货地址。所有在Cakewith.ME网站上列出的配送时间皆为参考时间，仅供用户参照使用。该参考时间是根据商品库存状况、订单处理流程和配送地点等情况综合计算得出的。
</p><p>
5、 退换货规则：Cakewith.ME网站有权制定、发布商品退换货规则，并对该等规则享有修改权、解释权。用户在Cakewith.ME网站提交订单即表明其接受Cakewith.ME网站的退换货规则。
</p><p>
6、 订单取消规则：
</p><p>
① 用户有权在下列情况下，取消订单：</p><p>
a) 经用户和Cakewith.ME协商达成一致的；</p><p>
b) Cakewith.ME对用户订单做出承诺之前；</p><p>
c) Cakewith.ME网站上公布的商品价格发生变化或错误，用户在Cakewith.ME发货之前通知Cakewith.ME的。</p><p>
② Cakewith.ME在下列情况下，可以取消用户订单：</p><p>
a) 经Cakewith.ME和用户协商达成一致的；</p><p>
b) Cakewith.ME网站上显示的商品信息明显错误或缺货的；</p><p>
c) 用户订单信息明显错误或用户订购数量超出Cakewith.ME备货量的。</p><p>
③ Cakewith.ME网站在下列情况下，亦可取消用户订单：</p><p>
a) 因不可抗力、Cakewith.ME网站系统发生故障或遭受第三方攻击，及其他Cakewith.ME网站无法控制的情形，根据Cakewith.ME网站判断需要取消用户订单的；</p><p>
b) 经Cakewith.ME网站判断，用户订购行为不符合公平原则或诚实信用原则的情形（如同一用户多次无理由拒收订购商品）；</p><p>
c) 按Cakewith.ME网站已经发布的或将来可能发布或更新的各类规则，可取消用户订单的其他情形。
</p><h4>
六、 责任限制与不可抗力
</h4><p>
1、 在法律法规所允许的限度内，因使用Cakewith.ME网站服务而引起的任何损害或经济损失，Cakewith.ME网站承担的全部责任均不超过就用户所购买的与该索赔有关的商品所实际获得的直接收益。这些责任限制条款将在法律所允许的最大限度内适用，并在用户账户被注销后仍继续有效。
</p><p>
2、 Cakewith.ME网站仅限在“按现状”和“按现有”的基础上，向用户提供全部的信息、内容、材料、产品（包括软件）和服务。除非另有明确的书面说明，Cakewith.ME网站不对其包含在Cakewith.ME网站上的信息、内容、材料、产品（包括软件）或服务作任何形式的、明示或默示的担保。
</p><p>
3、 不论在任何情况下，Cakewith.ME网站均不对由于互联网设备正常维护，互联网络连接故障，电脑、通讯或其他系统的故障，电力故障，罢工，暴乱，骚乱，灾难性天气（如火灾、洪水、风暴等），爆炸，战争，政府行为，司法行政机关的命令或第三方的不作为而造成的不能履行或延迟履行承担责任。
</p><h4>
七、 服务的中断和终止：
</h4><p>
1、 用户向Cakewith.ME网站提出注销账户申请，经Cakewith.ME网站审核同意后，由Cakewith.ME网站注销该用户账户，本协议即告终止。但在注销该用户账户后，Cakewith.ME网站仍有权：
</p><p>
①保留该用户的注册信息及过往的全部交易行为记录；</p><p>
② 如用户在账户注销前在Cakewith.ME网站上存在违法行为或违反本协议的行为，Cakewith.ME网站仍可行使本协议所规定的权利。
</p><p>
2、 在下列情况下，Cakewith.ME网站可以通过注销用户账户的方式单方解除本协议：
</p><p>
① 在用户违反本协议相关规定时，Cakewith.ME网站有权暂停或终止向该用户提供服务。如该用户在Cakewith.ME网站暂停或终止提供服务后，再一次直接或间接或以他人名义注册为Cakewith.ME网站用户的，则Cakewith.ME网站有权再次暂停或终止向该用户提供服务；</p><p>
② 如Cakewith.ME网站通过用户提供的信息与用户联系时，发现用户在注册时填写的电子邮箱已不存在或无法接收电子邮件的，经Cakewith.ME网站以其他联系方式（如有）通知用户，而用户在三个工作日内仍未能提供新的有效电子邮箱地址的，Cakewith.ME网站有权终止向该用户提供服务；</p><p>
③ 一经发现用户注册信息中的内容是虚假的，Cakewith.ME网站即有权终止向该用户提供服务；</p><p>
④ 本协议修改或更新时，如用户表示不愿接受新的服务协议的，Cakewith.ME网站有权终止向该用户提供服务；</p><p>
⑤ Cakewith.ME网站认为需终止提供服务的其他情况。
</p><h4>
八、 适用的法律和管辖权
</h4><p>
本协议的订立、执行和解释及争议的解决均应适用中华人民共和国的法律。如发生本协议与法律相抵触的情形，则该条款将按法律规定重新解释，而其他条款继续有效。如就本协议内容或其执行发生任何争议，则双方应首先通过友好协商方式解决；协商不成的，任何一方均应向Cakewith.ME网站所在地有管辖权的法院提起诉讼解决。
</p><h4>
九、 知识产权
</h4><p>
1、 Cakewith.ME网站上的图表、标识、网页页眉、按钮图标、文字、服务品名等标示在网站上的信息都是Cakewith.ME网站运营方及其关联方的财产，受中国和国际知识产权法的保护。未经Cakewith.ME网站许可，任何人不得使用、复制或用作其他用途。在Cakewith.ME网站上出现的其他商标是其商标权利人各自的财产，未经Cakewith.ME网站运营方或相关商标所有人的书面许可，任何第三方都不得使用。
</p><p>
2、 Cakewith.ME网站用户发表的文章仅代表作者本人观点，与Cakewith.ME网站立场无关。作者文责自负。
</p><p>
3、 Cakewith.ME网站及其关联方有权将用户在本网站发表的商品使用体验、商品讨论或图片进行使用或者与其他人合作使用，使用范围包括但不限于网站、电子杂志、杂志、刊物等，使用时需为作者署名，以发表文章时注明的署名为准。文章有附带版权声明者除外。
</p><p>
4、 用户在Cakewith.ME网站上发表的文章及图片（包括转贴的文章及图片）版权仅归属原作者所有，若作者有版权声明或原作从其他网站转载而附带有原版权声明者，其版权归属以附带声明为准。
</p><p>
5、 任何转载、引用发表于Cakewith.ME网站的版权文章须符合以下规范：
</p><p>
① 用于非商业、非盈利、非广告性目的时需注明作者及文章及图片的出处为“Cakewith.ME网站”或“www.Cakewith.MEcom”；</p><p>
② 用于商业、盈利、广告性目的时需征得文章或图片原作者的同意，并注明作者姓名、授权范围及原作出处“Cakewith.ME网站”或“www.Cakewith.ME.com”；</p><p>
③ 任何文章或图片的修改或删除均应保持作者原意并征求原作者同意，并注明授权范围。
</p><h4>
十、 信息保护
</h4><p>
1、 用户个人隐私：请阅读Cakewith.ME网站的隐私保护政策以了解隐私政策。该声明适用于您访问Cakewith.ME网站，或在Cakewith.ME网站购买商品或使用Cakewith.ME网站提供的任何服务。
</p><p>
2、 信息安全
</p><p>
① Cakewith.ME网站账户和提现功能有密码保护，请用户妥善保管账户及密码信息；</p><p>
② 如果用户发现自己的个人信息泄密，尤其是Cakewith.ME网站账户及密码或提现密码发生泄露，请用户立即联络Cakewith.ME网站客服，以便Cakewith.ME网站采取相应措施。
</p><p>
3、 Cookie的使用规则
</p><p>
① 通过Cakewith.ME网站所设Cookie所取得的有关信息，将适用本规则；</p><p>
② 在Cakewith.ME网站上发布信息的第三方通过其所发布信息在用户计算机上设定Cookies的，将按该第三方的隐私权政策使用；</p><p>
③ 编辑和删除个人信息的权限：用户可以点击“我的廿一客”对用户的个人信息进行编辑和删除，除非Cakewith.ME网站另有规定。
            </p>
            
          </div>
          <div class="column one-fourth">
            <h3 class="title" style="margin-top:20px;color:#333;">目录</h3>
            <div class="cont" style="padding:0;">
              <a class="menuitem" href="#/baseinfo">问题1</a>
              <a class="menuitem" href="#/account">问题2</a>
              <a class="menuitem" href="#/address">问题2</a>
              <a class="menuitem" href="#/myorder">问题2</a>
              <a class="menuitem" href="#/coupon">问题3</a>
              <a class="menuitem" href="#/baseinfo">问题1</a>
              <a class="menuitem" href="#/account">问题2</a>
              <a class="menuitem" href="#/address">问题2</a>
              <a class="menuitem" href="#/myorder">问题2</a>
              <a class="menuitem" href="#/coupon">问题3</a>
            </div>
          </div>
      </div>
    </div>
<div class="fullbox foot" style="margin-top:20px;">
	<div class="centerbox">
			<ul class="footleft">
				<li><a>回到顶部</a></li>
				<li><a href="/cakefox/index.php/Home/Index/about.html" target="_blank">关于我们</a></li>
				<li><a href="/cakefox/index.php/Home/Index/buy&delivery.html" target="_blank">购买&配送</a></li>
				<li><a href="/cakefox/index.php/Home/Index/complain&right.html" target="_blank">投诉&维权</a></li>
				<li><a href="/cakefox/index.php/Home/Index/agreement.html" target="_blank">条款协议</a></li>
				<li><a href="/cakefox/index.php/Home/Index/serviceforbusiness.html" target="_blank">企业服务</a></li>
				<li><a href="/cakefox/index.php/Home/Index/job.html" target="_blank">招贤纳士</a></li>
				<li></li>
				<li>© 2015 Cakewith.ME, Inc.</li>
				<li>浙ICP备12036459号-2</li>
			</ul>
			<div class="shareiconbox">
				<div><i class="fa fa-weibo"></i></div>
				<div><i class="fa fa-weixin"></i></div>
				<div><i class="fa fa-tencent-weibo"></i></div>
				<div><i class="fa fa-tumblr"></i></div>
			</div>
	</div>
</div>
<script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>

<!--  -->

<script>
var h = $(window).height();

</script>

  </body>

  </html>