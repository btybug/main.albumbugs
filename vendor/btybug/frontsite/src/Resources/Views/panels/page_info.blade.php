{!! BBcustomize('layouts','page_layout','frontend',
                                                        (isset($page->page_layout) && $page->page_layout)?'Change':'Select',
                                                        'page_layout_'.$page->id,['class'=>'btn btn-default change-layout','model' =>$page]) !!}