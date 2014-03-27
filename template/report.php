<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Report</title>
        <link rel = "stylesheet" type = "text/css" href = "template/css/style.css" />
    </head>
    <body>
        <div class = "container">
            <div class="left">
                <div id="personal">
                <?php $basedata = $this->model->basedata; ?>
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Personal Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td><?php echo $basedata->ApplicantID; ?></td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td><?php echo $basedata->prefix; ?></td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td><?php echo $basedata->FirstName; ?></td>
                        </tr>
                        <tr>
                            <td>Middle Name</td>
                            <td><?php echo $basedata->MiddleName; ?></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><?php echo $basedata->LastName; ?></td>
                        </tr>
                        <tr>
                            <td>DOB</td>
                            <td><?php echo $basedata->DOB; ?></td>
                        </tr>
                        <tr>
                            <td>National Id</td>
                            <td><?php echo $basedata->natreg; ?></td>
                        </tr>
                        <tr>
                            <td>Sex</td>
                            <td>t<?php echo $basedata->Sex; ?></td>
                        </tr>
                        <tr>
                            <td>Home Phone</td>
                            <td><?php echo $basedata->Telephone; ?></td>
                        </tr>
                        <tr>
                            <td>Cell Phone</td>
                            <td><?php echo $basedata->Cell; ?></td>
                        </tr>
                         <tr>
                            <td>Work Phone</td>
                            <td><?php echo $basedata->Work; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $basedata->Email; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <div id="emergency">
                <?php $emergency = $this->model->emergency; ?>
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">
                                Emergency Information
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><?php echo $emergency->FirstName . " " . $emergency->LastName; ?></td>
                        </tr>
                        <tr>
                            <td>Home Phone</td>
                            <td><?php echo $emergency->Telephone; ?></td>
                        </tr>
                        <tr>
                            <td>Work Phone</td>
                            <td><?php echo $emergency->Work; ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>
                                <?php echo $emergency->Address1; ?><br />
                                <?php echo $emergency->Address2; ?><br />
                                <?php echo $emergency->Address3; ?><br />
                                <?php echo $this->model->Parish($emergency->Address4); ?><br />
                                <?php echo $this->model->Country($emergency->Address5); ?><br />
                                <?php echo $emergency->postalcode; ?><br />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <div id="work">
                <?php $work = $this->model->work; ?>
                <table>
                    <thead>
                        <tr>
                            <th colspan="4">Work Experience</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td>Position Held</td>
                            <td>Employer</td>
                            <td>From</td>
                            <td>To</td>
                        </tr>
                        <?php for($i = 0; $i < $work->size; $i++): ?>
                        <tr>
                            <td><?php echo $work->workplaces[$i]->PositionHeld; ?></td>
                            <td><?php echo $work->workplaces[$i]->Employer; ?></td>
                            <td><?php echo $work->workplaces[$i]->StartYear; ?></td>
                            <td><?php echo $work->workplaces[$i]->EndYear; ?></td>
                        </tr>
                        <?php endfor; ?>  
                    </tbody>
                </table>            
            </div>
            </div>
            
            <div class="middle">
                <div>
                <?php $address = $this->model->address; ?>
                    <table>

                    <thead>
                        <tr>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $address->Address1; ?><br />
                                <?php echo $address->Address2; ?><br />
                                <?php echo $address->Address3; ?><br />
                                <?php echo $this->model->Parish($address->Address4); ?><br />
                                <?php echo $this->model->Country($address->Address5); ?><br />
                                <?php echo $address->PostalCode; ?><br />
                            </td>
                        </tr>
                    </tbody>
                </table>

                    <table>
                    <thead>
                        <tr>
                            <th>Mail Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $address->MailAddress1; ?><br />
                                <?php echo $address->MailAddress2; ?><br />
                                <?php echo $address->MailAddress3; ?><br />
                                <?php echo $this->model->Parish($address->MailAddress4); ?><br /><br />
                                <?php echo $this->model->Country($address->MailAddress5); ?><br />
                                <?php echo $address->MailPostalCode; ?><br />
                            </td>
                        </tr>
                    </tbody>
                </table>

                    <table>
                    <thead>
                        <tr>
                            <th>Responsibility For Fees</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $basedata->responsibilityforfees; ?></td>
                        </tr>
                    </tbody>

                </table>
                </div>
                <div id="medical">
                <?php $medical = $this->model->medical; ?>
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Medical History</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <?php echo $medical->disability1; ?><br />
                                <?php echo $medical->disabilitynote1; ?><br />
                                <?php echo $medical->disability2; ?><br />
                                <?php echo $medical->disabilitynote1; ?><br />
                                <?php echo $medical->disability3; ?><br />
                                <?php echo $medical->disabilitynote1; ?><br />
                                <?php echo $medical->disability4; ?><br />
                                <?php echo $medical->disabilitynote1; ?><br />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> 
            </div>
            
            <div class ="right">
                <div id="immigration">
                <?php $details = $this->model->details; ?>
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Immigration Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Birth Country</td>
                            <td><?php echo $this->model->Country($details->birthcode); ?></td>
                        </tr>
                        <tr>
                            <td>Nationality</td>
                            <td><?php echo $this->model->Country($details->countrycode); ?></td>
                        </tr>
                        <tr>
                            <td>Residency</td>
                            <td><?php echo $this->model->Country($details->residencecode); ?></td>
                        </tr>
                        <tr>
                            <td>Passport Number</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Immigration Status</td>
                            <td><?php echo $this->model->Immigration($details->immigrationcode); ?></td>
                        </tr>
                        <tr>
                            <td>Effective Date</td>
                            <td><?php echo $details->ImmigrationStartDate; ?></td>
                        </tr>
                        <tr>
                            <td>Expiry Date</td>
                            <td><?php echo $details->ImmigrationEndDate; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <div id="qualification">
                <?php $subjects = $this->model->subjects; ?>
                <table>
                    <thead>
                        <tr>
                            <th colspan="5">Academic Qualifications</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Exam Body</td>
                            <td>Level</td>
                            <td>Name</td>
                            <td>Grade</td>
                            <td>Year</td>
                        </tr>
                        <?php for ($i = 0; $i < $subjects->size; $i++): ?>
                        <tr>
                            <td><?php echo $subjects->applicantsubjects[$i]->ExamBoby; ?></td>
                            <td><?php echo $subjects->applicantsubjects[$i]->Level; ?></td>
                            <td><?php echo $subjects->applicantsubjects[$i]->Description; ?></td>
                            <td><?php echo $subjects->applicantsubjects[$i]->Grade; ?></td>
                            <td><?php echo $subjects->applicantsubjects[$i]->Year ; ?></td>
                        </tr>
                        <?php endfor;?>
                    </tbody>
                </table>            
            </div>
            </div>
            <div class ="space"></div>
        </div>
            
        <div class="container">
            <div id="education">
                <?php $school = $this->model->school; ?>
                <table>
                    <thead>
                        <tr>
                            <th colspan="3">Educational History</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>School Name</td>
                            <td>From</td>
                            <td>To</td>
                        </tr>
                        <?php for($i = 0; $i < $school->size; $i++): ?>
                         <tr>
                             <td><?php echo $this->model->SchoolList($school->applicantschools[$i]->code); ?></td>
                             <td><?php echo $school->applicantschools[$i]->startyear; ?></td>
                             <td><?php echo $school->applicantschools[$i]->endyear; ?></td>
                         </tr>
                        <?php  endfor; ?>
                    </tbody>
                </table>            
            </div>
        </div>
        <div class="container">
            <div id="program">
                <?php $program = $this->model->program; ?>
                <table>
                    <thead>
                        <tr>
                            <th colspan="5">Program Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Program Type</td>
                            <td>Program Name</td>
                            <td>Full Time/Part Time</td>
                            <td>Rank</td>
                            <td>Priority</td>
                        </tr>
                        <?php for($i = 0; $i < $program->size; $i++): ?>
                        <tr>
                            <td><?php echo $program->applicantprograms[$i]->programtypeName; ?></td>
                            <td><?php echo $program->applicantprograms[$i]->programname; ?></td>
                            <td><?php echo $program->applicantprograms[$i]->fulltime; ?></td>
                            <td><?php echo $program->applicantprograms[$i]->rank; ?></td>
                            <td><?php echo $this->model->Priorities($program->applicantprograms[$i]->priority); ?></td>
                        </tr>
                         <?php endfor; ?>
                    </tbody>
                </table>            
            </div>
        </div>       
    </body>
</html>
