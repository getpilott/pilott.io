<?php
/**
 * Page Header: Base
 */

if (is_home()) {
  get_template_part('templates/page-header/_page-header-blog');
} elseif (is_single()) {
  get_template_part('templates/page-header/_page-header-single');
} else {
  get_template_part('templates/page-header/_page-header-main');
}
