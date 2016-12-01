<div class="sidebar col-md-4">
                                <div class="sidebar-widget">
                                 <?php $data = array('class' => 'deleteform');   ?>
                                  <?php echo form_open('library/singlelibrary',$data);?>
                                    <div class="sidebar-search">
                                        <input class="search" type="text" name="name" placeholder="Search library by name" list="librarylist"/>
                                        <input type="hidden" name="source" value="1"/>
                                        <datalist id="librarylist">
                						     <?php foreach ($libraries as $lib): ?>
                						     	<option value="<?= trim($lib['library']) ?>"></option>
                							  <?php endforeach ; ?>	
                						</datalist>
                                        <input class="search-button" type="submit" value="" />
                                    </div>
                                </form>
                                </div><!-- Sidebar Search -->
                        <div class="sidebar-widget">
                            <ul class="sidebar-list">
                             <?php foreach ($libraries as $lib): ?>
                                <li><a href="<?= base_url()?>library/singlelibrary/<?= $lib['library'] ?>/1" class=".libs"  url="<?= $lib['url']?>" title=""><b><?= $lib['library']?></b></a></li>
                             <?php endforeach ; ?>
                            </ul>
                        </div>
                    </div>