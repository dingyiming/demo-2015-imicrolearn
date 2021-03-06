<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class CourseViewModel extends ViewModel {

	//$viewFields 属性表示视图模型包含的字段，每个元素定义了某个数据表或者模型的字段。
   public $viewFields = array( 
     'course'=>array('cid','cname','ctitle','cimg'),
     'coursetype'=>array('id'=>'typeid','typename', '_on'=>'course.ctypeid=coursetype.id'),
     'stepcontent'=>array('scontent', 'stepid','stepimg','_on'=>'stepcontent.cid=course.cid'),
   );
 }
