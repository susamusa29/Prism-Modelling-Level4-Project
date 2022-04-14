# PRISM Modelling - Level 4 Project

The research project is about applying probabilistic verification to analyse dice game. 
We use probabilistic verification tools PRISM and PRISM games. This readme explains commands
in both tools that are used throughout this research.
More information can be found at: [PRISM Model Checker](https://www.prismmodelchecker.org/).

# PRISM
PRISM is a probabilistic model checker that enables verification of probabilistic systems. You can
build your models in any editor and then load them on PRISM. You can also build your models on 
PRISM itself. PRISM also supports properties. Property files can again be build on PRISM GUI or with
an editor of choice and then just load the file directly on PRISM.

### Prerequisites
1. This research was conducted with a Linux distribution, Ubuntu Operating System: **Ubuntu 20.04.4 LTS**.
These are not strong prerequisites as PRISM is supported for  Linux, Windows and Mac OS X, both 64-bit and 32-bit versions. 
Wherever a specific Linux command is used, that will be denoted with: <cmd_command> _(Linux specific)_.
2. Editor: **PyCharm 2022.1 (Professional Edition)** ; 
3. Recommended Editor: **Visual Studio Code** as it supports Prism plugin PRISM-language v0.0.1 that offers
simple highlighting for PRISM language.
4. **PRISM v. 4.7**

### Getting started
If you do not have PRISM already installed on your personal machine. Follow the guidance on 
[Installing PRISM Instructions](https://www.prismmodelchecker.org/manual/InstallingPRISM/Instructions).

### Running PRISM GUI and PRISM Command Line Interface (CLI)
_(Linux specific)_
To run PRISM, execute either the xprism or prism script 
(for the graphical user interface or command-line version, respectively). These can be found in 
the bin directory. These scripts are designed to be run from anywhere and you can easily create 
symbolic links or aliases to them. If you want icons to create desktop shortcuts to PRISM, 
you can find some in the etc directory.  (from [Installing PRISM Instructions](https://www.prismmodelchecker.org/manual/InstallingPRISM/Instructions))

_(Linux specific)_
You can also create an alias for PRISM GUI and PRISM CLI of **xprism** and **prism**, respectively.
If on run the PRISM GUI, assuming a Linux distribution, open the 'Terminal' and type: `xprism`.

Navigate to your Home directory and create a file: **.bash_aliases**. Into the file put the following lines:

```shell
# ======================
# Prism aliases
alias prism='~/prism-4.7-linux64/bin/prism'
alias xprism='~/prism-4.7-linux64/bin/xprism'
# ======================
```

Now you can start PRSIM GUI and PRISM CLI with commands:

For PRISM GUI:
```shell
xprism
```
For PRISM CLI:
```shell
prism
```
To see help type:
```shell
prism - help
```

For another OS refer to:  [Installing PRISM Instructions](https://www.prismmodelchecker.org/manual/InstallingPRISM/Instructions)

The commands later on assume an alias has been made. If you decided to not do that you can just 
replace **prism** or **xprism** with relevant running command.

### PRISM Files
#### PRISM Model Files
PRISM offers a variety of different file extensions for PRISm models. More information can be found at: 
[PRISM Model Files](https://www.prismmodelchecker.org/manual/ThePRISMLanguage/PRISMModelFiles). The
recommended extension that is also used throughout this project is: **.prism**.

### PRISM Property Files
Property Files use the recommended extension: **.props**. More information can be found at:
[PRISM Property Files](https://www.prismmodelchecker.org/manual/PropertySpecification/PropertiesFiles)
#### How to load models from the PRISM GUI
In order to load a model file in the PRISM GUI select: Model/Open Model... and then navigate to your chosen file.

For example, to open the model for Shut the Box game select: Model/Open Model... and navigate to where
file **Shut_The_Box_new.prism** is located.
### How to load properties from the PRISM GUI
In order to load a property file in the PRISM GUI select: Properties/Open properties list... and then navigate to 
your chosen property file.

For example, to open the properties file for Shut the Box game select: select: Properties/Open properties list... and navigate to where
file **Shut_The_Box.props** is located.
### How to run experiments in the PRISM GUI
In order to verify a property, after loading the model and property files, is done in **three** steps:
1. Select the property you wish to verify
2. Right Click on Mouse
3. Select 'New Experiments'

Note: experiments produce graphs that can be exported by: Right Click on Mouse + 'Export Graph' 
### How to verify a property
In order to verify a property, after loading the model and property files, is done in **three** steps:
1. Select the property you wish to verify
2. Right Click on Mouse
3. Select 'Verify'

### How to generate states (.sta) and transition (.tra) files from the PRISM command line interface
To generate and optimal straty (tra file) and states file you can run:

```shell
prism -dir #directory-where-files-are-located# #model name# #property file# -prop #property number# -s -exportadvmdp #name#.tra -exportstates #name#.sta
```


To run properties against an optimal strategy you can use the followng two commands:
```shell
prism -dir #directory-where-files-are-located# #model name# #property file# -prop #property number# -s -exportadvmdp tmp.tra -exportstates tmp.sta -exportlabels tmp.lab
```
```shell
prism -dir #directory-where-files-are-located# -mdp -importtrans tmp.tra -importstates tmp.sta -importlabels tmp.lab #property file and parmeters#
```

For more information on PRISM refer to: [PRISM Documentaiton](https://www.prismmodelchecker.org/doc/).
# PRISM-games
PRISM-games is an extension to PRISM that allows for modelling stochastic multiplayer games. In this
research it is used to model the 2-player turn based game: Pig Dice. For more information visit:
[PRISM-games](https://www.prismmodelchecker.org/games/)

**Note:** Commands that are omitted follow the same pattern as for PRISM.
### Prerequisites
1. This research was conducted with a Linux distribution, Ubuntu Operating System: **Ubuntu 20.04.4 LTS**.
These are not strong prerequisites as PRISM is supported for  Linux, Windows and Mac OS X, both 64-bit and 32-bit versions. 
Wherever a specific Linux command is used, that will be denoted with: <cmd_command> _(Linux specific)_.
2. Editor: **PyCharm 2022.1 (Professional Edition)** ; 
3. Recommended Editor: **Visual Studio Code** as it supports Prism plugin PRISM-language v0.0.1 that offers
simple highlighting for PRISM language.
4. **PRISM-games v. 3.0**

### Getting started
If you do not have PRISM-games already installed on your personal machine. Follow the guidance on 
[PRISM-games](https://www.prismmodelchecker.org/games/installation.php).

### Running PRISM-games 
_(Linux specific)_
Run bin/xprism for the GUI or bin/prism for the command-line version.
(from [PRISM-games: Installation](https://www.prismmodelchecker.org/games/installation.php))

_(Linux specific)_
You can also create an alias for PRISM-games GUI and PRISM-games CLI of **xprism-games** and **prism-games**, respectively.

Navigate to your Home directory and create a file: **.bash_aliases** if you do not have one already. Into the file put the following lines:

```shell
# ======================
# Prism aliases
alias prism-games='~/prism-games-3.0-linux64/bin/prism'
alias xprism-games='~/prism-games-3.0-linux64/bin/xprism'
# ======================
```

Now you can start PRSIM GUI and PRISM CLI with commands:

For PRISM GUI:
```shell
xprism-games
```
For PRISM CLI:
```shell
prism-games
```
To see help type:
```shell
prism-games -help
```

For another OS refer to: [PRISM-games: Installation](https://www.prismmodelchecker.org/games/installation.php)

The commands later on assume an alias has been made. If you decided to not do that you can just 
replace **prism-games** or **xprism-games** with relevant running command.


### How to generate states (.sta) and transition (.tra) files from the PRISM command line interface
To generate and optimal straty (tra file) and states file you can run:
```shell
prism-games -javamaxmem #memory size# <path-to-model>/#model name# <path-to-props>/#property filename# -prop #property number# -const #constant name and value# -s -exportadvmdp <path-to-export>/#filename#.tra  -exportstates <path-to-export>/#filename#.sta
```

For example for Pig Dice the command will look like the following:
```shell
prism-games -javamaxmem #memory size# <path-to-project>/prism-modelling-l4/pig-dice-game/pd.prism <path-to-project>/prism-modelling-l4/pig-dice-game/pd.props -prop 1 -const win_score=25 -s -exportadvmdp <path-to-project>/prism-modelling-l4/pig-dice-game/analysis/pd.tra  -exportstates <path-to-project>/prism-modelling-l4/pig-dice-game/analysis/pd.sta
```

For more information on PRISM-games refer to: [PRISM-games Instructions](https://www.prismmodelchecker.org/games/instructions.php).


