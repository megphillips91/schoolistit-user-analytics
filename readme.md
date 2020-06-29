  
== SchooListIt User Analytics ==
Contributors: megphillips91
Donate link: https://msp-media.org/product/support-open-source/
Tags: analytics,
Requires at least: 5.0
Tested up to: 5.5
Requires PHP: 5.3
Stable tag: 1.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

SchooListIt User Analytics is a user specific analytics plugin which creates custom rest api endpoints through which you can save data on user interactions with your site. This is certainly a consideration for GDPR and you MUST have user consent to use this plugin. ah... legal legal legal

## Description

## Background ##
**Using data for good.**

This plugin is begin developed in conjuction with SchooListIt for the purposes of gathering the data needed to learn from 

- what are the parental involvement metrics and student involvement metrics which would be indicators for early intervention with at risk students
- how can we granularly pair student with learning style? any movement towards remote learning naturally decouples the teacher from the 'lecturer'. The 'lecturer' may be a wikipedia article, youtube video, national geographic video... how can we gather the right data to correlate media type, teaching style, practice assignments, etc with student performance and student learning style such that we are learning to granularly diagnose a students learning style and pair that with the proper 'lesson' for any given topic?

## Assumptions
- we will endeavor to record user interactions with the DOM and timestamp as approriate. Each record will be tied to a "touchpoint" and a "location"
- listeners to be recorded: clicks, scroll actions
- touchpoints will be detailed within a wp_db_table wp_schlst_touchpoints and identified by short Description and long description
- mapped to touchpoints by touchpoint_id

## Applications

Analysis of the data gathered is not within scope for this plugin. However, future usage may include:
-- applying latency measures to trigger parental involvement when too much time has elapsed
-- triggering parental involvement when students have upcoming assignments which teacher highlights as priority
-- measuring student time on page for lessons and alarming student and or teacher when the student is not spending time to learn the material
-- alarming teacher when student learning style has been identified within statistical certainty or when any change is detected so that teacher can work with student to adjust individual learning plan
-- machine suggested individual learning plans for each student
-- integrating to LENA api is such API exists would be a natural value added to this system allowing educators to use language as an indicator of additional needs for children. A huge step in closing the gap.

## Screenshots

## Changelog