<?php
/*********************************************************************
* Author: Colin Greenwood
* Date: 20260323
* Description: The Last Door
* Version: 0.1.0
**********************************************************************/

// Set variables before starting (this is only a precaution but shouldn't be needed)
$NOTE = false;
$KEYCARD = false;
$KNOWS_TRUTH = false;

$QUESTION1 = true;
while ($QUESTION1 == true) {
  // printf output a formatted string.
  printf("\n\nWelcome to The Last Door, a short game in the terminal.\n");
  printf("To play: press the corresponding number and then enter to choose which path you want to go.\n\n\n");
  printf("You wake up on a cold concrete floor.\n");
  printf("A faint buzzing fills the air.\n");
  printf("The room is bare,\n");
  printf("except for a heavy metal door in front of you.\n\n");

  // Question 1.0
  printf("Option 1: Open the door\n");
  printf("Option 2: Check your pockets\n");
  // Collect answer
  $userChoice = readline("");

  switch ($userChoice) {
    // Option 1
    case 1:
      $QUESTION1 = false;
      printf("You open the door.\n\n");
    break;

    // Option 2
    case 2:
      $QUESTION1_2 = true;
      while ($QUESTION1_2 == true) {
        $QUESTION1 = false;
        $NOTE = true;
        printf("You pat your pockets.\n\n");
        printf("A crumpled note.\n\n");
        printf("It reads:\n");
        printf("\"Don't trust the last door\"\n\n");

        // Question 1.2
        printf("Option 1: Open the door\n");
        // Collect answer
        $userChoice = readline("");

        switch ($userChoice) {
          // Option 1
          case 1:
            $QUESTION1_2 = false;
            printf("You open the door.\n\n");
          break;
          // Option 2 (EASTER EGG)
          case 2:
            $QUESTION1_2 = false;
            printf("(Secret Dialogue found)\n");
            printf("You pat your pockets again, this has no use.\n");
            printf("You open the door.\n\n");
          break;
        }
      }
    break;
  }
}
$QUESTION2 = true;
while ($QUESTION2 == true) {
  printf("The door groans as it opens.\n\n");
  printf("You step into a storage room.\n");
  printf("Shelves line the walls.\n");
  printf("A low hum vibrates behind them.\n\n");

  // Question 2.0
  printf("Option 1: Search the shelves\n");
  printf("Option 2: Move on\n");
  // Collect answer
  $userChoice = readline("");

  // Option 1
  switch ($userChoice) {
    case 1:
      $QUESTION2_1 = true;
      while ($QUESTION2_1 == true) {
        $QUESTION2 = false;
        $KEYCARD = true;
        printf("You search carefully.\n");
        printf("Most boxes are empty.\n");
        printf("But tucked behind a panel you find:\n");
        printf("A keycard!\n");
        printf("You take it.\n\n");

        // Question 2.1
        printf("Option 2: Move on\n");
        // Collect answer
        $userChoice = readline("");

        // Option 2
        switch ($userChoice) {
          case 2:
            $QUESTION2_1 = false;
            printf("You continue on forwards.\n\n");
          break;

          // Option 1 (EASTER EGG)
          case 1:
            $QUESTION2_1 = false;
            printf("(Secret Dialogue found)\n");
            printf("You search the shelves even more, the only stuff you find is unusable garbage.\n");
            printf("You continue on forwards.\n\n");
          break;
        }
      }
    break;
  
    // Option 2
    case 2:
      $QUESTION2 = false;
      printf("You continue on forwards.\n\n");
    break;
  }
}
$QUESTION3 = true;
while ($QUESTION3 == true) {
  printf("A narrow hallway stretches ahead. Lights flicker overhead.\n");
  printf("At the end: a locked door with a keycard reader.\n\n");

  // Question 3.0
  printf("Option 1: Try the keycard reader\n");
  printf("Option 2: Try to force the door\n");
  printf("Option 3: Go back\n");
  // Collect answer
  $userChoice = readline("");

  switch ($userChoice) {
    // Option 1
    case 1:
      $QUESTION3 = false;
      switch ($KEYCARD) {
        case true:
          printf("The reader beeps.\n");
          printf("The light turns green and the door unlocks.\n");
          printf("You go through.\n\n");
        break;

        case false: 
          $QUESTION3_1 = true;
          while ($QUESTION3_1 == true) {
            printf("You swipe your hand across the reader.\n");
            printf("Nothing happens.\n");
            printf("You don't have a keycard.\n\n");

            // Question 3.1
            printf("Option 2: Try to force the door\n");
            printf("Option 3: Go back\n");
            // Collect answer
            $userChoice = readline("");

            switch ($userChoice) {
              // Option 1 (EASTER EGG)
              // SECRET ENDING (The human keycard)
              case 1:
                $QUESTION3_1 = false;
                printf("(Secret Dialogue found)\n");
                printf("You continue to swipe your hand across the reader.\n");
                printf("It wears you out and you end up dying from exhaustion.\n\n\n");
                printf("ENDING FOUND:\n");
                printf("The human keycard (secret ending)");
                exit();
              break;

              // Option 2
              // ENDING (Failure)
              case 2:
                $QUESTION3_1 = false;
                printf("You slam into the door.\n");
                printf("Pain shoots through your shoulder.\n");
                printf("You keep trying but the metal doesn't budge\n");
                printf("Your vision blurs.\n");
                printf("You collapse.\n\n\n");
                printf("ENDING FOUND:\n");
                printf("Failure");
                exit();
              break;

              // Option 3
              case 3:
                $QUESTION3_3 = true;
                while ($QUESTION3_3 == true) {
                  printf("You turn back.\n");
                  printf("The door you came through is gone.\n");
                  printf("Only the hallway remains.\n\n");

                  // Question 3.3
                  printf("Option 1: Turn around\n");
                  // Collect answer
                  $userChoice = readline("");

                  // Option 1
                  if ($userChoice == 1) {
                    $QUESTION3_3 = false;
                  }
                }
              break;

            }
          }
        break;
      }
    break;

    // Option 2
    // ENDING (Failure)
    case 2:
      $QUESTION3 = false;
      printf("You slam into the door.\n");
      printf("Pain shoots through your shoulder.\n");
      printf("You keep trying but the metal doesn't budge\n");
      printf("Your vision blurs.\n");
      printf("You collapse.\n\n\n");
      printf("ENDING FOUND:\n");
      printf("Failure");
      exit();
    break;

    // Option 3
    case 3:
      $QUESTION3_3 = true;
      while ($QUESTION3_3 == true) {
        printf("You turn back.\n");
        printf("The door you came through is gone.\n");
        printf("Only the hallway remains.\n\n");

        // Question 3.3
        printf("Option 1: Turn around\n");
        // Collect answer
        $userChoice = readline("");

        // Option 1
        if ($userChoice == 1) {
          $QUESTION3_3 = false;
        }
      }
    break;
  }
}
$QUESTION4 = true;
while ($QUESTION4 == true) {
  printf("You step into a control room.\n");
  printf("Monitors flicker with static.\n");
  printf("One screen shows a live feed...\n");
  printf("On the feed seems to be.. you,\n");
  printf("standing in this room.\n\n");

  // Question 4.0
  printf("Option 1: Inspect the monitors\n");
  printf("Option 2: Ignore them and continue\n");

  // Collect answer
  $userChoice = readline("");

  switch ($userChoice) {
    // Option 1
    case 1:
      $QUESTION4 = false;
      $QUESTION4_1 = true;
      while ($QUESTION4_1 == true) {
        printf("You move closer.\n");
        printf("The image glitches for a moment.\n\n\n");
        printf("You're lying on the floor.\n");
        printf("Text flickers onto the screen:\n\n");
        printf("SUBJECT 03 - LOOP ACTIVE\n\n");

        // Question 4.1
        printf("Option 1: Step away\n");
        printf("Option 2: Keep watching\n");

        // Collect answer
        $userChoice = readline("");

        switch ($userChoice) {
          case 1:
            $QUESTION4_1 = false;
            $KNOWS_TRUTH = false;
          break;

          case 2:
            $QUESTION4_1 = false;
            $QUESTION4_1_2 = true;
            while ($QUESTION4_1_2 == true) {
              $KNOWS_TRUTH = true;
              printf("The text changes:\n\n");
              printf("\"DO NOT TRUST THE EXIT\"\n\n");
              printf("Your pulse quickens\n\n");

              // Question 4.1.2
              printf("Option 1: Continue forward\n");

              // Collect answer
              $userChoice = readline("");

              switch ($userChoice) {
                case 1:
                  $QUESTION4_1_2 = false;
                break;
              }
            }
          break;
        }
      }
    break;

    // Option 2
    case 2:
      $QUESTION4 = false;
      $KNOWS_TRUTH = false;
    break;
  }
}
$QUESTION5 = true;
while ($QUESTION5 == true) {
  printf("You enter a clean white room.\n");
  printf("Unlike everything else, it's spotless.\n");
  printf("A single door is in front of you.\n");
  printf("No handle.\n");
  printf("Only a button with the label:\n\n");
  printf("\"EXIT\"\n\n");

  // Question 5.0
  printf("Option 1: Press the button\n");
  printf("Option 2: Go back\n");

  // Collect answer
  $userChoice = readline("");

  switch ($userChoice) {
    // Option 1
    // ENDING (Loop)
    case 1:
      $QUESTION5 = false;
      printf("The door slides open.\n");
      printf("Bright light floods in.\n\n\n");
      printf("You step through.");
      usleep(500000); // Wait for 500 ms (0.5 seconds)
      printf(".");
      usleep(500000);
      printf(".");
      usleep(500000);
      printf(".");
      usleep(500000);
      printf(".");
      sleep(1);
      printf("\n\nYou wake up on a cold concrete floor.\n");
      printf("A faint buzzing fills the air.\n");
      printf("The room is bare,\n");
      printf("except for a heavy metal door in front of you.\n\n\n");
      printf("ENDING FOUND:\n");
      printf("Loop");
      exit();
    break;

    // Option 2
    case 2:
      $QUESTION5 = false;
      $QUESTION5_2 = true;
      while ($QUESTION5_2 == true) {
        switch ($KNOWS_TRUTH) {
          case false:
            printf("You hesitate.\n");
            printf("But something pulls you forward.\n");
            printf("You turn back but..\n");
            printf("The white room is gone.\n");
            printf("You're standing in front of the button again.\n\n");

            // Question 5.2 false
            printf("Option 1: Press the button\n");

            // Collect answer
            $userChoice = readline("");

            switch ($userChoice) {
              // Option 1
              // ENDING (Loop)
              case 1:
                $QUESTION5_2 = false;
                printf("The door slides open.\n");
                printf("Bright light floods in.\n");
                printf("You step through.");
                usleep(500000); // Wait for 500 ms (0.5 seconds)
                printf(".");
                usleep(500000);
                printf(".");
                usleep(500000);
                printf(".");
                usleep(500000);
                printf(".");
                sleep(1);
                printf("\n\nYou wake up on a cold concrete floor.\n");
                printf("A faint buzzing fills the air.\n");
                printf("The room is bare,\n");
                printf("except for a heavy metal door in front of you.\n\n\n");
                printf("ENDING FOUND:\n");
                printf("Loop");
                exit();
              break;
              
              // Option 2 (EASTER EGG)
              // SECRET ENDING (Hesitation)
              case 2:
                $QUESTION5_2 = false;
                printf("(Secret Dialogue found)\n");
                printf("You continue to look back,\n");
                printf("hoping that the room returns.\n");
                printf("A lot of time goes by,\n");
                printf("you don't even know how long.\n");
                printf("Eventually you die of thirst.\n\n\n");
                printf("ENDING FOUND:\n");
                printf("Hesitation (secret ending)");
                exit();
              break;
            }
          break;

          case true:
            if ($NOTE == true) {
              printf("You step back.\n");
              printf("The lights flicker\n");
              printf("The walls distort.\n");
              printf("The room glitches like a broken screen.\n");
              printf("A hidden door appears behind you\n\n");

              // Question 5.2 true
              printf("Option 1: Press the EXIT button anyway\n");
              printf("Option 2: Enter the hidden door\n");

              // Collect answer
              $userChoice = readline("");

              switch ($userChoice) {
                // Option 1
                // ENDING (Loop)
                case 1:
                  $QUESTION5_2 = false;
                  printf("The door slides open.\n");
                  printf("Bright light floods in.\n");
                  printf("You step through.");
                  usleep(500000); // Wait for 500 ms (0.5 seconds)
                  printf(".");
                  usleep(500000);
                  printf(".");
                  usleep(500000);
                  printf(".");
                  usleep(500000);
                  printf(".");
                  sleep(1);
                  printf("\n\nYou wake up on a cold concrete floor.\n");
                  printf("A faint buzzing fills the air.\n");
                  printf("The room is bare,\n");
                  printf("except for a heavy metal door in front of you.\n\n\n");
                  printf("ENDING FOUND:\n");
                  printf("Loop");
                  exit();
                break;
                // Option 2
                // ENDING (Truth)
                case 2:
                  $QUESTION5_2 = false;
                  printf ("You step through.\n");
                  sleep(2);
                  printf("Darkness..\n");
                  sleep(2);
                  printf("Then you feel some cold air.\n");
                  sleep(2);
                  printf("You wake up.\n");
                  sleep(2);
                  printf("Not on concrete but..\n");
                  sleep(2);
                  printf("it looks like a lab.\n");
                  sleep(2);
                  printf("Machines surround you.\n");
                  sleep(2);
                  printf("A voice speaks:\n");
                  sleep(2);
                  printf("\"Subject 03");
                  sleep(1);
                  printf(".");
                  sleep(1);
                  printf(".");
                  sleep(1);
                  printf(".");
                  sleep(1);
                  printf(" has broken the loop.\"");
                  printf("ENDING FOUND:\n");
                  printf("Truth");
                  exit();
                break;
              }
            }
            if ($NOTE == false) {
              printf("You hesitate.\n");
              printf("But something pulls you forward.\n");
              printf("You turn back but..\n");
              printf("The white room is gone.\n");
              printf("You're standing in front of the button again.\n\n");

              // Question 5.2 false
              printf("Option 1: Press the button\n");

              // Collect answer
              $userChoice = readline("");

              switch ($userChoice) {
                // Option 1
                // ENDING (Loop)
                case 1:
                  $QUESTION5_2 = false;
                  printf("The door slides open.\n");
                  printf("Bright light floods in.\n");
                  printf("You step through.");
                  usleep(500000); // Wait for 500 ms (0.5 seconds)
                  printf(".");
                  usleep(500000);
                  printf(".");
                  usleep(500000);
                  printf(".");
                  usleep(500000);
                  printf(".");
                  sleep(1);
                  printf("\n\nYou wake up on a cold concrete floor.\n");
                  printf("A faint buzzing fills the air.\n");
                  printf("The room is bare,\n");
                  printf("except for a heavy metal door in front of you.\n\n\n");
                  printf("ENDING FOUND:\n");
                  printf("Loop");
                  exit();
                break;
                
                // Option 2 (EASTER EGG)
                // SECRET ENDING (Hesitation)
                case 2:
                  $QUESTION5_2 = false;
                  printf("(Secret Dialogue found)\n");
                  printf("You continue to look back,\n");
                  printf("hoping that the room returns.\n");
                  printf("A lot of time goes by,\n");
                  printf("you don't even know how long.\n");
                  printf("Eventually you die of thirst.\n\n\n");
                  printf("ENDING FOUND:\n");
                  printf("Hesitation (secret ending)");
                  exit();
                break;
              }
            }
          break;
        }
      }
    break;
  }
}
?>