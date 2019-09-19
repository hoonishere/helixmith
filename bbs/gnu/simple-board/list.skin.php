<div class="boxy-warp sub-contents">
	<?php
	include_once(G5_THEME_PATH.'/lsnb_include/l_snb4.php');
	?>
	<div class="r-sub-con">
		<?php
		if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

		// 선택옵션으로 인해 셀합치기가 가변적으로 변함
		$colspan = 5;

		if ($is_checkbox) $colspan++;
		if ($is_good) $colspan++;
		if ($is_nogood) $colspan++;
		$subject_px = 875-($colspan*50+70);
		// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
		add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
		?>

		<style>
		span.w_subject{width:<?php echo $subject_px?>px;}
		}
		</style>

		<!-- 게시판 목록 시작 { -->
		<div id="bo_list" style="width:<?php echo $width; ?>">

				<form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
				<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
				<input type="hidden" name="stx" value="<?php echo $stx ?>">
				<input type="hidden" name="spt" value="<?php echo $spt ?>">
				<input type="hidden" name="sca" value="<?php echo $sca ?>">
				<input type="hidden" name="sst" value="<?php echo $sst ?>">
				<input type="hidden" name="sod" value="<?php echo $sod ?>">
				<input type="hidden" name="page" value="<?php echo $page ?>">
				<input type="hidden" name="sw" value="">

				
				<div class="bo_list">
						<ul>
						<?php
						for ($i=0; $i<count($list); $i++) {
						 ?>
						<li class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>"">
								<?php if ($is_checkbox) { ?>
								<span class="s-check">
										<!-- <label for="chk_wr_id_<?php echo $i ?>" class="sound_only mobile_none"><?php echo $list[$i]['subject'] ?></label> -->
										<input class="mobile_none"  type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>"/>
								</span>
								<?php } ?>

								<span class="s-name" style="padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply'])*10) : '0'; ?>px" onclick="location.href='<?php echo $list[$i]['href'] ?>'">
										<div class="bo_tit">
										<?php
										if ($is_category && $list[$i]['ca_name']) {
										 ?>
										<a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
										<?php } ?>
												
												<a href="<?php echo $list[$i]['href'] ?>">
														<?php echo $list[$i]['icon_reply'] ?>
														<?php
																if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
														 ?>

														<?php echo conv_subject($list[$i]['wr_subject'], 15, "..."); ?>
													 
												</a>
										</div>

								</span>
								<span class="s-user"><?php echo $list[$i]['name'] ?></span>
								<span class="s-view"><nobr class="pc_none"></nobr> <?php echo $list[$i]['wr_hit'] ?></span>
								<?php if ($is_good) { ?><span class="w50"><nobr class="pc_none"><i class="fa fa-thumbs-up" aria-hidden="true"> </i></nobr> <?php echo $list[$i]['wr_good'] ?></span><?php } ?>
								<?php if ($is_nogood) { ?><span class="w50"><nobr class="pc_none"><i class="fa fa-thumbs-down" aria-hidden="true"> </i></nobr> <?php echo $list[$i]['wr_nogood'] ?></span><?php } ?>
								<span class="s-day"><nobr class="pc_none"></nobr> <?php echo $list[$i]['datetime2'] ?></span>
						</li>
						<?php } ?>
						<?php if (count($list) == 0) { echo '<li style="text-align:center;">게시물이 없습니다.</li>'; } ?>
						</ul>
				</div>

				<?php if ($list_href || $is_checkbox || $write_href) { ?>
				<div class="bo_fx">
						<?php if ($list_href || $write_href) { ?>
						<ul class="btn_bo_user">
								<?php if ($is_checkbox) { ?>
								<li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_admin">delete</button></li>
								<li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn_admin">copy</button></li>
								<li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn_admin">move</button></li>
								<?php } ?>
								<?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01 btn">list</a></li><?php } ?>
								<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn">write</a></li><?php } ?>
						</ul>
						<?php } ?>
				</div>
				<?php } ?>

				</form>
				 
					 <!-- 게시판 검색 시작 { -->
				<fieldset id="bo_sch">
						<legend>게시물 검색</legend>

						<form name="fsearch" method="get">
						<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
						<input type="hidden" name="sca" value="<?php echo $sca ?>">
						<input type="hidden" name="sop" value="and">
						<!-- <label for="sfl" class="sound_only">검색대상</label> -->
						<select name="sfl" id="sfl">
								<option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>title</option>
								<option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>content</option>
								<option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>title + content</option>
						</select>
						<!-- <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label> -->
						<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="insert keywords..">
						<button type="submit" value="search" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
				</fieldset>
				<!-- } 게시판 검색 끝 -->   
		</div>

		<?php if($is_checkbox) { ?>
		<noscript>
		<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
		</noscript>
		<?php } ?>



		<!-- 페이지 -->
		<?php echo $write_pages;  ?>


		<?php if ($is_checkbox) { ?>
		<script>
		function all_checked(sw) {
				var f = document.fboardlist;

				for (var i=0; i<f.length; i++) {
						if (f.elements[i].name == "chk_wr_id[]")
								f.elements[i].checked = sw;
				}
		}

		function fboardlist_submit(f) {
				var chk_count = 0;

				for (var i=0; i<f.length; i++) {
						if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
								chk_count++;
				}

				if (!chk_count) {
						alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
						return false;
				}

				if(document.pressed == "선택복사") {
						select_copy("copy");
						return;
				}

				if(document.pressed == "선택이동") {
						select_copy("move");
						return;
				}

				if(document.pressed == "선택삭제") {
						if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
								return false;

						f.removeAttribute("target");
						f.action = "./board_list_update.php";
				}

				return true;
		}

		// 선택한 게시물 복사 및 이동
		function select_copy(sw) {
				var f = document.fboardlist;

				if (sw == "copy")
						str = "복사";
				else
						str = "이동";

				var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

				f.sw.value = sw;
				f.target = "move";
				f.action = "./move.php";
				f.submit();
		}
		</script>
		<?php } ?>
		<!-- } 게시판 목록 끝 -->
	</div>
</div>