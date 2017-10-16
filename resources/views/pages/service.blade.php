@extends('main')

@section('title','| service')

@section('content')

      <div class="service_All" id="service_All">
        <div class="img">
          <img src="images/aboutUs-2.png">
        </div>
        	<h1>产品与服务</h1>
			<div class="service_page">
				<div class="service_Section" id="service1">
					<div class="service_Title fl clear">
						<h3 ><a href="#">新闻素材<br>资料材料<br>互惠交易</a></h3>
					</div>
					<div class="service_Des fl">
						<p>制定灵活多样的新闻内容交换机制，包括新闻素材、直播信号、新闻资料等，搭建先进的内容上传、包装、分发、交流平台，依靠前沿技术，提高平台处理内容交换业务的智能化水平。具体合作方式包括等量互换、积分奖励、付费定制、会员制等。联盟成员间的资料素材交易将享受互惠政策，提供定制化资料服务和报题机制，以此提高成员单位的节目制作效率并降低资金投入。</p>
					</div>	
				</div>
				<div class="service_Section">
					<div class="service_Title fl clear" id="service2">
						<h3><a href="">报道互助<br>网络</a></h3>
					</div>
					<div class="service_Des fl" >
						<p>联盟成员在记者资源、设备、报道途径、新闻选题、本土新闻策划、信息源等方面互帮互助，形成联盟一带一路新闻报道互助网。</p>
					</div>	
				</div>
				<div class="service_Section">
					<div class="service_Title fl clear" id="service3">
						<h3><a href="">新闻支持</a></h3>
					</div>
					<div class="service_Des fl" >
						<p>为新闻报道提供信息，人员和技术支持，联盟将鼓励各成员单位分享各自的资源。</p>
					</div>	
				</div>
				<div class="service_Section">
					<div class="service_Title fl clear" id="service4">
						<h3><a href="">新媒体平台<br>联盟</a></h3>
					</div>
					<div class="service_Des fl">
						<p>联盟成员单位新媒体组建联盟机制，相互关注，深化互动，通过联合各自的社交平台共同推广成员单位品牌和相关产品。</p>
					</div>	
				</div>
				<div class="service_Section">
					<div class="service_Title fl clear" id="service5">
						<h3><a href="">评奖激励<br>政策</a></h3>
					</div>
					<div class="service_Des fl">
						<p>在联盟范围设定新闻奖项，并逐步扩大奖项门槛、标准和含金量，使其成为具有国际影响力的新闻大奖。</p>
					</div>	
				</div>
				<div class="service_Section">
					<div class="service_Title fl clear" id="service6">
						<h3><a href="">定制化业务<br>培训</a></h3>
					</div>
					<div class="service_Des fl">
						<p>整合联盟成员经验和智慧，形成有针对性、实战型的培训内容，内容的采编播、媒体转型策略和战略的制定、工作流程、编辑部架构、新媒体发展策略等全方面，落实方式包括培训班、研讨会、论坛等。</p>
					</div>	
				</div>
				<div class="service_Section">
					<div class="service_Title fl clear" id="service7">
						<h3><a href="">媒体实验室</a></h3>
					</div>
					<div class="service_Des fl" id="service7">
						<p>联盟成员共同成立媒体实验室，针对业内领先技术和理念，比如新闻产品化、新闻机器人、VR/360新闻、AR新闻等领先领域，做好前期探索和测试，形成产品原型，以便后续产品化。以此保持联盟的领先地位，区别联盟与其他现有媒体联盟的核心竞争力。</p>
					</div>	
				</div>
			</div> <!-- end of class service -->
      </div>

      <div class="fixImageRight">
	      <a href="#service_All">{!! HTML::image('images/BackToTop.png') !!} </a>  
	  </div>
		
@endsection