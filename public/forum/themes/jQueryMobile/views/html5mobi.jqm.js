/**
 * 作者：刚子
 * 移动Web开发社区移动版网页脚本
 */
(function(){
// categories.html
$('#categories').live('pagecreate',function(event){
	  $.getJSON(url('/categories.json?&callback=?'),
		function(data) {
			var Categories = data.Categories
			var li_array = ['<li data-role="list-divider">所有分类</li>']
			for(var i in Categories){
				if(i==0) continue
				li_array.push(tplCategories(Categories[i]))
				$('ul[data-role="listview"]','#categories').html(li_array.join(''))
				$('ul[data-role="listview"]','#categories').listview('refresh')
				$('ul[data-role="listview"] li a','#categories').click(function(){
		 			setParam('CateURLCode',datasetValue(this, 'data-urlcode'))
		 			setParam('CateName',datasetValue(this, 'data-catename'))
		 			setParam('CateDisuzNum',datasetValue(this, 'data-catedisuznum'))
		 		})
    			
			}
		}
      );
});

$('#cate_discuz').live('pagecreate',function(event){
	  $.getJSON(url('/categories/'+ getParam('CateURLCode') +'.json?callback=?'),
		function(data) {
			var li_array = ['<li data-role="list-divider">'+ getParam('CateName') +'<span class="ui-li-count">'+ getParam('CateDisuzNum') +'</span></li>']
			findItems(li_array, data.DiscussionData)
			$('ul[data-role="listview"]','#cate_discuz').html(li_array.join(''))
			$('ul[data-role="listview"]','#cate_discuz').listview('refresh')
	 		$('ul[data-role="listview"] li a','#cate_discuz').click(function(){
	 			setParam('DiscussionID',datasetValue(this, 'data-id'))
	 		})
		}
      );
});

function tplCategories(item){
	return '<li  data-icon="false"><a href="cate_discuz.html" data-urlcode="'+ item.UrlCode +'" data-catename="'+ item.Name +'" data-catedisuznum="'+ item.CountDiscussions +'">' + item.Name + '<span class="ui-li-count">'+ item.CountDiscussions +'</span></a></li>'
}

//About Page
$('#about').live('pagecreate',function(event){
	  $.getJSON(url('/discussion.json?DiscussionID=1&callback=?'),
		function(data) {
			$('div.ui-body h1','#about').html(data.Discussion.Name)
			$('div.ui-body p','#about').html(data.Discussion.Body)
		}
      );
});

//index.html
$('#discussion').live('pageshow',function(event){
	  $.getJSON(url('/discussion.json?DiscussionID='+ getParam('DiscussionID') +'&callback=?'),
		function(data) {
			$('div.ui-body h1','#discussion').html(data.Discussion.Name)
			$('div.ui-body p','#discussion').html(data.Discussion.Body)
		}
      );
});

$('#index').live('pagecreate',function(event){
	  $.getJSON(url('/discussions.json?page=1-10&callback=?'),
		function(data) {
			var li_array = ['<li data-role="list-divider">热点讨论</li>']
			findItems(li_array, data.Announcements)
			findItems(li_array, data.Discussions)
			$('ul[data-role="listview"]').html(li_array.join(''))
			$('ul[data-role="listview"]').listview('refresh')
	 		$('ul[data-role="listview"] li a').click(function(){
	 			setParam('DiscussionID',datasetValue(this, 'data-id'))
	 		})
		}
      );
});
function findItems(array, items){
	for(var i in items){
		var item = items[i];
		array.push(tpl(item))
	}
}
function tpl(item){
	var poto = item.FirstPhoto
	if(poto){
		var poto_array = poto.split('/')
		poto = poto_array[0] + '/t' + poto_array[1]
	}else{
		poto = 'userpics/html5.jpg'
	}
	var lastName = item.LastName==null ? '' : item.LastName + '&nbsp;&nbsp;&nbsp;&nbsp;'
	var memo = item.CountComments + '&nbsp;评论&nbsp;&nbsp;&nbsp;&nbsp; ' + item.CountViews + '&nbsp;浏览&nbsp;&nbsp;&nbsp;&nbsp; 最近更新：' + lastName + item.LastDate.split(' ')[0]
	return '<li  data-icon="false"><a href="#discussion" data-transition="flip" data-id="'+ item.DiscussionID +'"><img src="http://html5mobi.gotoip1.com/uploads/'+ poto +'"/><h3>' + item.Name + '</h3><p>'+ memo +'</p></a></li>'
}

// Heightcolor Navibar
$('[data-role="page"]').live("pageshow", function() {
	var $this = $(this)
	if($this.attr('id')=='index'){
		$($(this).find('a[data-icon="home"]')).addClass('ui-btn-active')
	}
});
function url(path){
	return 'http://html5mobi.com' + path
}
/**
 * 兼容不支持HTML5的浏览器，延迟加载模式
 */
function datasetValue(eleObj, dataTag){
	if(eleObj.dataset){
		datasetValue = function(eleObj, dataTag){
			return eleObj.dataset[dataTag.split('-')[1]]
		}
	}else{
		datasetValue = function(eleObj, dataTag){
			return $(eleObj).attr(dataTag)
		}
	}
	return datasetValue(eleObj, dataTag)
}
function setParam(name,value){
	localStorage.setItem(name,value)
}
function getParam(name){
	return localStorage.getItem(name)
}
})()