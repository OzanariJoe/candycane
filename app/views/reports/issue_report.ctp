<!--
<h2><%=l(:label_report_plural)%></h2>
-->
<h2><?php echo h(__('Report', true)); ?></h2>

<div class="splitcontentleft">
<!--
<h3><%=l(:field_tracker)%>&nbsp;&nbsp;<%= link_to image_tag('zoom_in.png'), :detail => 'tracker' %></h3>
<%= render :partial => 'simple', :locals => { :data => @issues_by_tracker, :field_name => "tracker_id", :rows => @trackers } %>
-->
<h3><?php echo h(__('Tracker', true)); ?>&nbsp;&nbsp;<?php echo $html->link($html->image('zoom_in.png'), array($project['identifier'], '?' => 'detail=tracker'), null, null, false); ?></h3>
<?php echo $this->element('reports/_simple', array('data' => $issues_by_tracker, 'field_name' => 'tracker_id', 'rows' => $trackers)); ?>
<br />
<!--
<h3><%=l(:field_priority)%>&nbsp;&nbsp;<%= link_to image_tag('zoom_in.png'), :detail => 'priority' %></h3>
<%= render :partial => 'simple', :locals => { :data => @issues_by_priority, :field_name => "priority_id", :rows => @priorities } %>
-->
<br />
<h3><?php echo h(__('Priority', true)); ?>&nbsp;&nbsp;<?php echo $html->link($html->image('zoom_in.png'), array($project['identifier'], '?' => 'detail=priority'), null, null, false); ?></h3>
<?php echo $this->element('reports/_simple', array('data' => $issues_by_priority, 'field_name' => 'priority_id', 'rows' => $priorities)); ?>
<br />
<!--
<h3><%=l(:field_assigned_to)%>&nbsp;&nbsp;<%= link_to image_tag('zoom_in.png'), :detail => 'assigned_to' %></h3>
<%= render :partial => 'simple', :locals => { :data => @issues_by_assigned_to, :field_name => "assigned_to_id", :rows => @assignees } %>
-->
<h3><?php echo h(__('Assigned to', true)); ?>&nbsp;&nbsp;<?php echo $html->link($html->image('zoom_in.png'), array($project['identifier'], '?' => 'detail=assigned_to'), null, null, false); ?></h3>
<?php echo $this->element('reports/_simple', array('data' => $issues_by_assigned_to, 'field_name' => 'assigned_to_id', 'rows' => $assignees)); ?>
<br />
<!--
<h3><%=l(:field_author)%>&nbsp;&nbsp;<%= link_to image_tag('zoom_in.png'), :detail => 'author' %></h3>
<%= render :partial => 'simple', :locals => { :data => @issues_by_author, :field_name => "author_id", :rows => @authors } %>
-->
<h3><?php echo h(__('Author', true)); ?>&nbsp;&nbsp;<?php echo $html->link($html->image('zoom_in.png'), array($project['identifier'], '?' => 'detail=author'), null, null, false); ?></h3>
<?php echo $this->element('reports/_simple', array('data' => $issues_by_author, 'field_name' => 'author_id', 'rows' => $authors)); ?>
<br />
</div>

<div class="splitcontentright">
<!--
<h3><%=l(:field_version)%>&nbsp;&nbsp;<%= link_to image_tag('zoom_in.png'), :detail => 'version' %></h3>
<%= render :partial => 'simple', :locals => { :data => @issues_by_version, :field_name => "fixed_version_id", :rows => @versions } %>
-->
<h3><?php echo h(__('Version', true)); ?>&nbsp;&nbsp;<?php echo $html->link($html->image('zoom_in.png'), array($project['identifier'], '?' => 'detail=version'), null, null, false); ?></h3>
<?php echo $this->element('reports/_simple', array('data' => $issues_by_version, 'field_name' => 'fixed_version_id', 'rows' => $versions)); ?>
<br />
<!--
<% if @project.children.any? %>
<h3><%=l(:field_subproject)%>&nbsp;&nbsp;<%= link_to image_tag('zoom_in.png'), :detail => 'subproject' %></h3>
<%= render :partial => 'simple', :locals => { :data => @issues_by_subproject, :field_name => "project_id", :rows => @subprojects } %>
<br />
<% end %>
-->
<?php if (!empty($subprojects)): ?>
<h3><?php echo h(__('Subproject', true)); ?>&nbsp;&nbsp;<?php echo $html->link($html->image('zoom_in.png'), array($project['identifier'], '?' => 'detail=subproject'), null, null, false); ?></h3>
<?php echo $this->element('reports/_simple', array('data' => $issues_by_subproject, 'field_name' => 'project_id', 'rows' => $subprojects)); ?>
<br />
<?php endif; ?>
<!--
<h3><%=l(:field_category)%>&nbsp;&nbsp;<%= link_to image_tag('zoom_in.png'), :detail => 'category' %></h3>
<%= render :partial => 'simple', :locals => { :data => @issues_by_category, :field_name => "category_id", :rows => @categories } %>
-->
<h3><?php echo h(__('Category', true)); ?>&nbsp;&nbsp;<?php echo $html->link($html->image('zoom_in.png'), array($project['identifier'], '?' => 'detail=category'), null, null, false); ?></h3>
<?php echo $this->element('reports/_simple', array('data' => $issues_by_category, 'field_name' => 'category_id', 'rows' => $categories)); ?>
<br />
</div>

