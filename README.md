<pre>
/////////////////////////////////////////////////////////////////////

 ____                _  _                  ____
|  _ \   __ _  _ __ | |(_) _ __    __ _   / ___| _ __ ___   ___
| | | | / _` || '__|| || || '_ \  / _` | | |    | '_ ` _ \ / __|
| |_| || (_| || |   | || || | | || (_| | | |___ | | | | | |\__ \
|____/  \__,_||_|   |_||_||_| |_| \__, |  \____||_| |_| |_||___/
                                  |___/

/////////////////////////////////////////////////////////////////////

A data driven tool for developing Web applications.

#############################################

 _____
|     |
| Key |
|_____|

Vertical  Reference:

      *             |             %
      *             |             %
      *             |             %
      *             |             %
Implementation   Extension    Injection


Horizontal Reference:

* * * * * = Implementation
--------- = Extension
% % % % % = Injection

#############################################



 ________________________                ___________________                 _____________________
|  Identifiable         |               |  Classifiable     |               |  Switchable         |
|||||||||||||||||||||||||               |||||||||||||||||||||               |||||||||||||||||||||||
|                       |               |                   |               |                     |
| getName(): string     |               | getType(): string |               | getState(): bool    |
| getUniqueId(): string |               |_______ __ ________|               | switchState(): bool |
|_________ __ __________|                       *  |                        |________ __ _________|
          *  |                                  *  |                                 *  %
          *  |                                  *  |                                 *  %
          *  |                                  *  |                                 *  %
          *  |                                  *  |                                 *  %
 _________*__|___________                 ______*__|_______                          *  %
|  Storable              |               |  Exportable     |                         *  %
||||||||||||||||||||||||||               |||||||||||||||||||                         *  %
| ...                    |               | ...             |                         *  %
| getLocation(): string  |               | export(): array |                         *  %
| getContainer(): string |               | import(): bool  |                         *  %
|_______ __ _____________|               |______ __ _______|                         *  %
        *  %                                    *  |                                 *  %
        *  %                                    *  |                                 *  %
        *  %                                    *  |                                 *  %
        *  %                                    *  |                                 *  %
        *  %                                    *  |                                 *  %
        *  %                                    *  |                                 *  %
        *  %                                    *  |                                 *  %
        *  %                              ______*__|_______________          ________*__%___________
        *  %                             |  Component              |        |  SwitchableComponent  |
        *  %                             |||||||||||||||||||||||||||        |||||||||||||||||||||||||
        *  % % % % % % % % % % % % % % % | ...                     |        | ...                   |
        *                                | getName(): string       |* * * * | getState(): bool      |
        * * * * * * * * * * * * * * * * *| getUniqueId(): string   |--------| switchState(): bool   |
                                         | getLocation(): string   |        |_______________________|
                                         | getContainer(): string  |
                                         |_________________________|


</pre>

