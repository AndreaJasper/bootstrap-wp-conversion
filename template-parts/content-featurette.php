 <?php
 //Course Instruction//
 $course_instruction_title = get_field('course_instruction_title');
 $course_instruction_body = get_field('course_instruction_body');
 $course_instruction_video = get_field('course_instruction_video');
 ?>
 <!-- VIDEO FEATURETTE
    ==========================================================-->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <h2><?php echo $course_instruction_title; ?></h2>
                    <!-- If user added body text -->
                <?php if( !empty($course_instruction_body) ) : ?>
                    <p><?php echo $course_instruction_body; ?></p>
                <?php endif; ?>
                    <div class="embed-container">
                        <?php echo $course_instruction_video; ?>
                    </div>
                </div>
            </div>
        </div>

    </section>