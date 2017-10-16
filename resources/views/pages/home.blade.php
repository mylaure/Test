@extends('main')

@section('title','| Homepage')

@section('stylesheets')
	{{-- <link rel="stylesheet" href="css/jquery.fullPage.css"> --}}
	{!! HTML::style('css/jquery.fullPage.css') !!}
@endsection


@section('content')
		<div id="dowebok">
			<div class="section" id="section0">
				{{-- <h3>第一屏</h3>
				<p>fullPage.js — 项目导航演示</p> --}}
				<video id="myVideo" loop muted data-autoplay="true">
					<source src="images/flowers.mp4" type="video/mp4">
					<source src="images/flowers.webm" type="video/webm">
				</video>
				<div class="layer" id="moveDown">
					{!! HTML::image('images/arrow.png') !!}
					{{-- <img src = "images/arrow.png" > --}}
				</div>
			</div>

			<div class="section" id="section1">
				<div class="aboutUs">
					<div class="aboutUs_img">
						{!! HTML::image('images/BRNA-Web-Concept-0811-F.jpg') !!}
						{{-- <img src="images/BRNA-Web-Concept-0811-F.jpg"> --}}
					</div>

					<div class="aboutUs_des"> {{-- description --}}
						<h3>BRNA介绍</h3>
						<p>由国际视通倡议成立、于2017年5月14日正式启动的“一带一路”新闻合作联盟(The Belt and Road News Alliance, BRNA)，截止到2017年7月10日，“一带一路”沿线27个国家及地区的40家媒体机构已声明加入BRNA。</p>
						{{-- <br> --}}
						<p>希望通过整合媒体资源，促进跨国界，跨地区信息的有效传播，并借由媒体间的新闻共享及人员，信息，技术，文化的交流，促进一带一路沿线媒体的共同成长，提升一带一路沿线媒体整体传播力和国际影响力，为一带一路沿线国家迈向命运共同体，提升一带一路人民的共同福祉贡献力量。</p>
					</div>
					
				</div>
			</div>

			<div class="section" id="section2">
				<div class="allService">
						<h1>SERVICES</h1>
					<div class="service">
						<div class="serviceDetail">
							{{-- <img src = "images/arrow.png" > --}}
							<h3><a href="/service#service1">新闻素材<br>
							资料素材<br>互惠交易</a></h3>
						</div>
						<div class="serviceDetail">
							{{-- <img src = "images/arrow.png" > --}}
							<h3><a href="/service#service2">报道互助<br>网络</a></h3>
						</div>
						<div class="serviceDetail">
							{{-- <img src = "images/arrow.png" > --}}
							<h3><a href="/service#service3">新闻支持</a></h3>
						</div>
						<div class="serviceDetail">
							{{-- <img src = "images/arrow.png" > --}}
							<h3><a href="/service#service4">新媒体平台<br>联盟</a></h3>
						</div>
						<div class="serviceDetail">
							{{-- <img src = "images/arrow.png" > --}}
							<h3><a href="/service#service5">评奖激励<br>政策</a></h3>
						</div>
						<div class="serviceDetail">
							{{-- <img src = "images/arrow.png" > --}}
							<h3><a href="/service#service6">定制化业务<br>培训</a></h3>
						</div>
						<div class="serviceDetail">
							{{-- <img src = "images/arrow.png" > --}}
							<h3><a href="/service#service7">媒体实验室</a></h3>
						</div>
						<div class="serviceDetail">
							{{-- <img src = "images/arrow.png" > --}}
							<h3><a href="/service#service1">更多</a></h3>
						</div>
					</div> <!-- end of class service -->
				</div><!-- end of class allService -->
			</div>

			<div class="section" id="section3">
				<div class="allMembership">
					<h1>联盟成员PC端</h1>
					<article>
		            <section>
							<!--row类名表示第几行，col表示第几列，定位用百分比定值，如果行数或者列数改变要重新算-->
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (1).jpg" alt="钱政">
			            <div class="MEM_info row_1">
			                <div class="MEM_tips col_1 "></div>
			                <dl class="hidev">
			                    <dt>CCTV+</dt>
			                    <dd>中国传媒大学动画专业学士，曾获第四届中国（北京）国际大学生动画节最佳单幅作品奖提名，北京大学生科学竞赛二等奖，入围第七届金龙奖原创漫画动画艺术大赛等，现任鲸鱼岛乐队总导演。中国传媒大学</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (2).jpg" alt="刘建">
			            <div class="MEM_info row_1">
			                <div class="MEM_tips col_2 "></div>
			                <dl class="hidev">
			                    <dt>刘建</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>

			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (4).jpg" alt="齐天佐">
			            <div class="MEM_info row_1">
			                <div class="MEM_tips col_3 "></div>
			                <dl class="hidev">
			                    <dt>齐天佐</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel and.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (3).jpg" alt="张业兴">
			            <div class="MEM_info row_1">
			                <div class="MEM_tips col_4 "></div>
			                <dl class="hidev">
			                    <dt>张业兴</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (5).jpg" alt="余骏峰">
			            <div class="MEM_info row_1">
			                <div class="MEM_tips col_5 "></div>
			                <dl class="hidev">
			                    <dt>余骏峰</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (6).jpg" alt="丁冬">
			            <div class="MEM_info row_1">
			                <div class="MEM_tips col_6 "></div>
			                <dl class="hidev">
			                    <dt>丁冬</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (7).jpg" alt="胡松">
			            <div class="MEM_info row_1">
			                <div class="MEM_tips col_7 "></div>
			                <dl class="hidev">
			                    <dt>胡松</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="Bottom" src="images/aboutus/GM__ (8).jpg" alt="郭钊成">
			            <div class="MEM_info row_1">
			                <div class="MEM_tips col_8 "></div>
			                <dl class="hidev">
			                    <dt>郭钊成</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (9).jpg" alt="王欢">
			            <div class="MEM_info row_2">
			                <div class="MEM_tips col_1 r_tips"></div>
			                <dl class="hidev">
			                    <dt>王欢</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (10).jpg" alt="刘瑞">
			            <div class="MEM_info row_2">
			                <div class="MEM_tips col_2 r_tips"></div>
			                <dl class="hidev">
			                    <dt>刘瑞</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (12).jpg" alt="董楠翔">
			            <div class="MEM_info row_2">
			                <div class="MEM_tips col_3 r_tips"></div>
			                <dl class="hidev">
			                    <dt>董楠翔</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (13).jpg" alt="李兆阳">
			            <div class="MEM_info row_2">
			                <div class="MEM_tips col_4 r_tips"></div>
			                <dl class="hidev">
			                    <dt>李兆阳</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (14).jpg" alt="王天白">
			            <div class="MEM_info row_2">
			                <div class="MEM_tips col_5 r_tips"></div>
			                <dl class="hidev">
			                    <dt>王天白</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (15).jpg" alt="张佳末">
			            <div class="MEM_info row_2">
			                <div class="MEM_tips col_6 r_tips"></div>
			                <dl class="hidev">
			                    <dt>张佳末</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (17).jpg" alt="丁子晟">
			            <div class="MEM_info row_2">
			                <div class="MEM_tips col_7 r_tips"></div>
			                <dl class="hidev">
			                    <dt>丁子晟</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="Bottom" src="images/aboutus/GM__ (19).jpg" alt="牛琦">
			            <div class="MEM_info row_2">
			                <div class="MEM_tips col_8 r_tips"></div>
			                <dl class="hidev">
			                    <dt>牛琦</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (18).jpg" alt="刘洋">
			            <div class="MEM_info row_3">
			                <div class="MEM_tips col_1 r_tips"></div>
			                <dl class="hidev">
			                    <dt>刘洋</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (22).jpg" alt="于培">
			            <div class="MEM_info row_3">
			                <div class="MEM_tips col_2 r_tips"></div>
			                <dl class="hidev">
			                    <dt>于培</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (23).jpg" alt="张云龙">
			            <div class="MEM_info row_3">
			                <div class="MEM_tips col_3 r_tips"></div>
			                <dl class="hidev">
			                    <dt>张云龙</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (26).jpg" alt="朱雨萌">
			            <div class="MEM_info row_3">
			                <div class="MEM_tips col_4 r_tips"></div>
			                <dl class="hidev">
			                    <dt>朱雨萌</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (27).jpg" alt="李辉">
			            <div class="MEM_info row_3">
			                <div class="MEM_tips col_5 r_tips"></div>
			                <dl class="hidev">
			                    <dt>李辉</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (28).jpg" alt="梁啸">
			            <div class="MEM_info row_3">
			                <div class="MEM_tips col_6 r_tips"></div>
			                <dl class="hidev">
			                    <dt>梁啸</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="RightBottom" src="images/aboutus/GM__ (29).jpg" alt="于晓娟">
			            <div class="MEM_info row_3">
			                <div class="MEM_tips col_7 r_tips"></div>
			                <dl class="hidev">
			                    <dt>于晓娟</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="Bottom" src="images/aboutus/GM__ (31).jpg" alt="郭岐">
			            <div class="MEM_info row_3">
			                <div class="MEM_tips col_8 r_tips"></div>
			                <dl class="hidev">
			                    <dt>郭岐</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" src="images/aboutus/GM__ (30).jpg" alt="叶存智">
			            <div class="MEM_info row_4">
			                <div class="MEM_tips col_1 r_tips"></div>
			                <dl class="hidev">
			                    <dt>叶存智</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="Right" src="images/aboutus/GM__ (32).jpg" alt="王淮民">
			            <div class="MEM_info row_4">
			                <div class="MEM_tips col_2 r_tips"></div>
			                <dl class="hidev">
			                    <dt>王淮民</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="Right" src="images/aboutus/GM__ (35).jpg" alt="刘皓">
			            <div class="MEM_info row_4">
			                <div class="MEM_tips col_3 r_tips"></div>
			                <dl class="hidev">
			                    <dt>刘皓</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="Right" src="images/aboutus/GM__ (34).jpg" alt="程浩">
			            <div class="MEM_info row_4">
			                <div class="MEM_tips col_4 r_tips"></div>
			                <dl class="hidev">
			                    <dt>程浩</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="Right" src="images/aboutus/GM__ (37).jpg" alt="林方惠">
			            <div class="MEM_info row_4">
			                <div class="MEM_tips col_5 r_tips"></div>
			                <dl class="hidev">
			                    <dt>林方惠</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="Right" src="images/aboutus/GM__ (36).jpg" alt="王梦媛">
			            <div class="MEM_info row_4">
			                <div class="MEM_tips col_6 r_tips"></div>
			                <dl class="hidev">
			                    <dt>王梦媛</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="Right" src="images/aboutus/GM__ (38).jpg" alt="孙俪方">
			            <div class="MEM_info row_4">
			                <div class="MEM_tips col_7 r_tips"></div>
			                <dl class="hidev">
			                    <dt>孙俪方</dt>
			                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae repellendus accusamus in quae perferendis neque harum quasi, dicta est itaque veritatis ab nostrum vel.</dd>
			                </dl>
			            </div>
			            <img class="MEM_img" id="Right" src="images/aboutus/GM__ (38).jpg" alt="孙俪方">
					</section>
		        	</article>
					{{-- <table class="table table-condensed table-bordered" id="memberTable">
						<tr>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
						</tr>
						<tr>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
						</tr>
						<tr>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
						</tr>
						<tr>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
							<td><img src = "images/arrow.png" ></td>
						</tr>
					</table> --}}
				</div><!-- end of class allMembership -->
			</div>

			<div class="section" id="section4">
				<div class="allTheMem">
						<h1>移动端MEMBERSHIP</h1>
					<div class="allMem">
						<div class="mem" id="mem">
							<div class="mem_img">
								<img src = "images/LOGO/BNT.jpg" >
							</div>
							<div class="memDes">
								<div class="memContent">
								<a href="">
									<h2>Bulgarian National Television</br>(BNT)</h2>
									<h2>Country name:</h2>
							</a>
								</div>
							</div>
						</div>
						<div class="mem" id="mem">
							<div class="mem_img">
								<img src = "images/LOGO/Channel-13.jpg" >
							</div>
							<div class="memDes">
								<div class="memContent">
								<a href="">
									<h2>Channel 13</h2>
									<h2>Country name:</h2>
								</a>
								</div>
							</div>
						</div>
						<div class="mem" id="mem">
							<div class="mem_img">
								<img src = "images/LOGO/HRT.jpg" >
							</div>
							<div class="memDes">
								<div class="memContent">
								<a href="">
									<h2>Croatian Radiotelevision（HRT）拼写待核对</h2>
									<h2>Country name:</h2>
								</a>
								</div>
							</div>
						</div>
						<div class="mem" id="mem">
							<div class="mem_img">
								<img src = "images/LOGO/Eagle-News-TV.jpg" >
							</div>
							<div class="memDes">
								<div class="memContent">
								<a href="">
									<h2>Eagle News TV</h2>
									<h2>Country name:</h2>
								</a>
								</div>
							</div>
						</div>
					</div><!-- end of class allEvent -->
				</div><!-- end of class allTheEvent -->
			</div>
			
			<div class="section" id="section4">
				<div class="allTheEvent">
						<h1>联盟大事记</h1>
					<div class="allEvent">
						<div class="event" id="event0">
							<div class="event_img">
								<img src = "images/arrow.png" >
							</div>
							<div class="eventDes">
								<div class="eventContent">
								<a href=""><h2>“打造新闻合作联盟”</h2>
									<h3>May 14th, 2017<span class="seperator">|</span><span class="tag">NEWS</span> {{-- 移动端才有 --}}</h3>
								</a>
								</div>
							</div>
						</div>
						<div class="event" id="event1">
							<div class="event_img">
								<img src = "images/arrow.png" >
							</div>
							<div class="eventDes">
								<div class="eventContent">
								<a href=""><h2>BRNA成员反馈</h2>
									<h3>May 14th, 2017<span class="seperator">|</span><span class="tag">MEETINGS</span>   {{-- 移动端才有 --}}</h3>
								</a>
								</div>
							</div>
						</div>


						{{-- <div class="event" id="event2">
							<div class="event_img">
								<img src = "images/arrow.png" >
							</div>
							<div class="eventDes">
								<div class="eventContent">
								<a href=""><h2>假装我是一个很长很长的标题</h2>
									<h3>May 1st, 2017<span class="seperator">|</span></h3>
									<p>Tag</p>
								</a>
								</div>
							</div>
						</div> --}}
					</div><!-- end of class allEvent -->
				</div><!-- end of class allTheEvent -->
			</div>
			
			<div class="section" id="section5">
				<div class="contact">
					<div class="contactLeft">
						<img src="images/contactUs.png">
					</div>
					
					<div class="contactRight">
					     <div class="row">
					       <div class="col-md-12">
					         {{-- <hr> --}}
					         <form action="{{ url('home') }}" method="POST">   {{-- "{{ url('contact') }}" --}}
					           {{ csrf_field() }}
					           <div class="col-xs-6 col-md-4">
					           	<div class="form-group" id="Firstname">
					             <label name="firstname">First Name</label>
					             <input id="firstname" name="firstname" class="form-control">  
					            </div>
					           </div>
					           <div class="col-xs-6 col-md-4">
					           	<div class="form-group" id="Lastname">
					             <label name="lastname">Last Name</label>
					             <input id="lastname" name="lastname" class="form-control">
					            </div>
					           </div>

					           <div class="col-md-12">
								<div class="form-group">
					             <label name="email">Email</label>
					             <input id="email" name="email" class="form-control">
					           </div>

								<div class="form-group"> <!-- 这个是新写的，数据库里面还没加-->
					             <label name="subject">Subject</label>
					             <input id="subject" name="subject" class="form-control">
					           </div>

					           <div class="form-group">
					             <label name="message">Your Message</label>
					             <textarea id="message" name="message" class="form-control" ></textarea> 
					           </div>

					           <button type="submit" value="Submit" class="btn btn-default" id="bluebtn">Submit</button>
					           </div>

					           {{-- <input type="submit" value="Submit" class="btn btn-default" id="bluebtn"> --}} {{-- bootstrap line 3003 --}}
					         </form>
					       </div> <!-- end of class .col-md-12-->
					     </div>  <!-- end of class .row-->
					</div> <!-- end of class .contactRight-->
					
					<div class="contactCover">
						<div class="contactInfo">
							<h2> CONTACT US</h2>
							<h3><span class="blue">TEL:</span>86-10-63960294</h3>
							<h3><span class="blue">EMAIL:</span>service@newscontent.cctv.com</h3>	
						</div>
					</div>

					{{-- <div class="footer clear text-center">
						<p>Copyright BRNA - All Right Reserved</p>
					</div> --}}

				</div> <!-- end of class .contact-->
			</div>

		</div>  <!-- end of id "dowebok" -->
@endsection
