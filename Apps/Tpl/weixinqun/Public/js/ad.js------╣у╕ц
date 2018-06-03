	var delta=0.08
	var collection;
	function floaters() {
		this.items	= [];
		this.addItem	= function(id,x,y,content)
				  {
					document.write('<DIV class='+id+'>'+content+'</DIV>');
					
					var newItem				= {};
					newItem.object			= document.getElementById(id);
					newItem.x				= x;
					newItem.y				= y;

					this.items[this.items.length]		= newItem;
				  }
		this.play	= function()
				  {
					collection				= this.items
					setInterval('play()',10);
				  }
		}
		function play()
		{

			for(var i=0;i<collection.length;i++)
			{
				var followObj		= collection[i].object;
				var followObj_x		= (typeof(collection[i].x)=='string'?eval(collection[i].x):collection[i].x);
				var followObj_y		= (typeof(collection[i].y)=='string'?eval(collection[i].y):collection[i].y);

				if(followObj.offsetLeft!=(document.body.scrollLeft+followObj_x)) {
					var dx=(document.body.scrollLeft+followObj_x-followObj.offsetLeft)*delta;
					dx=(dx>0?1:-1)*Math.ceil(Math.abs(dx));
					followObj.style.left=followObj.offsetLeft+dx;
					}

				if(followObj.offsetTop!=(document.body.scrollTop+followObj_y)) {
					var dy=(document.body.scrollTop+followObj_y-followObj.offsetTop)*delta;
					dy=(dy>0?1:-1)*Math.ceil(Math.abs(dy));
					followObj.style.top=followObj.offsetTop+dy;
					}
				followObj.style.display	= '';
			}
		}	
		
	var theFloaters		= new floaters();
	//右面
	theFloaters.addItem('followDiv1','document.body.clientWidth-106',80,'<a href=http://www.lanrentuku.com/ target=_blank ><img src=http://www.weixinqun.cc/statics/images/weixinqun/zhuceji.jpg border=0></a>');
	//左面
	theFloaters.addItem('followDiv2',6,80,'<a href=http://www.lanrentuku.com/ target=_blank ><img src=http://www.weixinqun.cc/statics/images/weixinqun/zhuceji.jpg border=0></a>');
	theFloaters.play();
	
//图片格式调用方法
//<a href=http://www.lanrentuku.com/ target=_blank><img src=images/ad_100x300.jpg border=0></a>
	